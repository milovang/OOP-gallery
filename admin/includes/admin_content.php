<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>
            <?php

//            $user = new User();
//            $user->username = "examle_username";
//            $user->password = "password";
//            $user->first_name = "John";
//            $user->last_name = "Doe";
//
//            $user->create();
//
//            $user = User::find_user_by_id(8);
//            $user->last_name = "lastname";
//            $user->password = "123";
//            $user->save();

//            $photo = new photo();
//            $photo->title = "photo 2";
//            $photo->size = "22";
//            $photo->save();

//            $photos = Photo::find_all();
//            foreach ($photos as $photo){
//                echo $photo->title;
//            }

            $photo = Photo::find_by_id(16);

            echo $photo->title;

            ?>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
