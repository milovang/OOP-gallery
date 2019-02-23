<?php
/**
 * Created by PhpStorm.
 * User: Milovan HP
 * Date: 10-Jan-19
 * Time: 20:38
 */

class Photo extends Db_object {

    protected static $db_table = "photos";
    protected static $db_table_fields = array('title', 'caption', 'description', 'filename', 'type', 'size', 'alternative_text');

    public $id;
    public $title;
    public $caption;
    public $description;
    public $filename;
    public $type;
    public $size;
    public $alternative_text;

    public $tmp_path;
    public $upload_directory = "images";
    public $errors = array();
    public $upload_errors_array = array(

        "UPLOAD_ERR_OK" => "Value: 0; There is no error, the file uploaded with success.",
        "UPLOAD_ERR_INI_SIZE" => "Value: 1; The uploaded file exceeds the upload_max_filesize directive in php.ini",
        "UPLOAD_ERR_FORM_SIZE" => "Value: 2; The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.",
        "UPLOAD_ERR_PARTIAL" => "Value: 3; The uploaded file was only partially uploaded.",
        "UPLOAD_ERR_NO_FILE" => "Value: 4; No file was uploaded.",
        "UPLOAD_ERR_NO_TMP_DIR" => "Value: 6; Missing a temporary folder. Introduced in PHP 5.0.3.",
        "UPLOAD_ERR_CANT_WRITE" => "Value: 7; Failed to write file to disk. Introduced in PHP 5.1.0.",
        "UPLOAD_ERR_EXTENSION" => "Value: 8; A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop; examining the list of loaded extensions with phpinfo() may help. Introduced in PHP 5.2.0.",

    );

    public function picture_path(){

        return $this->upload_directory.DS.$this->filename;

    }


    public function save(){

        if($this->id){

            $this->update();

        } else {

            if(!empty($this->errors)){
                return false;
            }

            if(empty($this->filename) || empty($this->tmp_path)){
                $this->errors[] = "The file was not available";
                return false;
            }

            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->filename;

            if(file_exists($target_path)){
                $this->errors[] = "The file {$this->filename} already exist";
                return false;
            }

            if(move_uploaded_file($this->tmp_path, $target_path)){
                if($this->create()){
                    unset($this->tmp_path);
                    return true;
                }
            } else {
                $this->errors[] = "The file directory probably does not have permission";
                return false;
            }

        }
    }

    public function delete_photo(){

        if($this->delete()){

            $target_path = SITE_ROOT.DS. 'admin' . DS . $this->picture_path();

            return unlink($target_path) ? true : false;

        } else {

            return false;

        }

    }




}