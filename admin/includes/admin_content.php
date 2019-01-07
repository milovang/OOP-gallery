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

//            $user = new User();
//            $user->username = "markasdao";
//            $user->first_name = "masdadrko";
//            $user->last_name = "marsdadakovic";
//            $user->password = "123";
//
//            $user->create();

            $users = User::find_all();
            foreach ($users as $user){
                echo $user->username;
            }

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
