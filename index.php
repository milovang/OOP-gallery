<?php include("includes/header.php");

$photos = Photo::find_all();

?>

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">
                <div class="thumbnails row">
                    <?php foreach($photos as $photo): ?>
                        <div class="col-xs-6 col-md-3">
                            <a class="thumbnail" href="photo-page.php?id=<?=$photo->id; ?>">
                                <img class="img-responsive homepage-photo" src="admin/<?=$photo->picture_path() ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>


            </div>




            <!-- Blog Sidebar Widgets Column -->
<!--            <div class="col-md-4">-->
<!---->
<!--            -->
<!--                 --><?php //include("includes/sidebar.php"); ?>
<!---->
<!---->
<!---->
<!--            </div>-->
        <!-- /.row -->

        <?php include("includes/footer.php"); ?>
