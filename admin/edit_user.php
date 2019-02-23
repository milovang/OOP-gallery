<?php include("includes/header.php"); ?>
<?php
if (!$session->is_signed_in()){
    redirect('login.php');
}
?>



<?php
if(empty($_GET['id'])){

    redirect('users.php');

} else {

    $user = User::find_by_id($_GET['id']);

    if (isset($_POST['update'])) {

        if ($user) {

            $user->username = $_POST['username'];
            $user->first_name = $_POST['first_name'];
            $user->last_name = $_POST['last_name'];
            $user->password = $_POST['password'];

            if(empty($_FILES['user_image'])){

                $user->save();

            } else {

                $user->set_file($_FILES['user_image']);
                $user->upload_photo();
                $user->save();

                redirect("edit_user.php?id={$user->id}");

            }

        }
    }
}


?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->


        <?php include("includes/top_nav.php"); ?>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include("includes/side_nav.php");?>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Edit User
                    </h1>
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="col-md-6">
                            <img src="<?=$user->image_path_placeholder(); ?>" alt="" class="img-responsive">
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="file" name="user_image">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" value="<?=$user->username; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" value="<?=$user->first_name; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" value="<?=$user->last_name; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" value="<?=$user->password; ?>"class="form-control">
                            </div>
                            <div class="form-group">
                                <a href="delete_user.php?id=<?=$user->id; ?>" class="btn btn-danger pull-left">Delete</a>
                                <input type="submit" name="update" class="btn btn-primary pull-right" value="Update">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- /.row -->

        </div>

        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>