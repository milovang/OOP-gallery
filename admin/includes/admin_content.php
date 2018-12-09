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

            $user = User::find_user_by_id(7);
            $user->last_name = "test save";
            $user->save();


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
