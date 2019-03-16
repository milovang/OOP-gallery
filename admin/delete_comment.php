<?php
require_once('includes/header.php');

if(!$session->is_signed_in()){
    redirect("index.php");
}

?>


<?php

if(empty($_GET['id'])){
    redirect("users.php");
}

$comment = Comment::find_by_id($_GET['id']);

if($comment){
    $comment->delete();
    redirect('comments.php');

} else {
    redirect("comments.php");
}
?>
