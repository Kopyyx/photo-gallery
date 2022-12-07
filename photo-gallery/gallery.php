<?php require_once("components/head.php"); ?>

    <section class="home">
        <?php require_once('components/nav.php'); ?>
        <div class="container h-100 d-flex justify-content-center flex-column">
            <div class="row d-flex justify-content-center">
                <div class="col-10 col-sm-12 col-md-4 text-center py-4">
                    <h3 class="page_title">GALLERY</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-8 col-sm-12 col-md-4 text-center py-4">
                    <a href="hockey.php"><img class="gallery_photo" src="photos/hockey3.jpg"></a>
                    <h2 class="overlay2">Hokej</h2>
                </div>
                <div class="col-8 col-sm-12 col-md-4 text-center py-4"><!--<h2 class="overlay2">Hokej</h2>-->
                    <img class="gallery_photo" src="photos/hockey7.jpg">
                    <h2 class="overlay2">Hokej</h2>
                </div>
                <div class="col-8 col-sm-12 col-md-4 text-center py-4"><!--<h2 class="overlay2">Hokej</h2>-->
                    <img class="gallery_photo" src="photos/hockey2.jpg">
                    <h2 class="overlay2">Hokej</h2>
                </div>
            </div>

        </div>

    </section>

<?php require_once('components/footer.php'); ?>

<?php require_once("login.php"); ?>