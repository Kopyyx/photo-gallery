<?php require_once("components/head.php"); ?>

    <section class="home">
        <?php require_once('components/nav.php'); ?>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                        class=""
                        aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                        class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="photos/group4.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="photos/hockey4.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="photos/couple1.jpg" class="d-block w-100">
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <div class="row d-flex justify-content-center">
                <div class="overlay_gallery_heading py-4">
                    <h3 class="page_title">GALERIE</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center overlay_gallery">
                <div class="col-8 col-sm-10 col-md-4 text-center py-4">
                    <a href="hockey.php"><img class="gallery_photo" src="photos/hockey3.jpg"></a>
                    <h4 class="overlay2">Hokej</h4>
                </div>
                <div class="col-8 col-sm-10 col-md-4 text-center py-4"><!--<h2 class="overlay2">Hokej</h2>-->
                    <a href="couple.php"><img class="gallery_photo" src="photos/couple3.jpg"></a>
                    <h4 class="overlay2">Párové fotografie</h4>
                </div>
                <div class="col-8 col-sm-10 col-md-4 text-center py-4"><!--<h2 class="overlay2">Hokej</h2>-->
                    <a href="group.php"><img class="gallery_photo" src="photos/group2.jpg"></a>
                    <h4 class="overlay2">Skupinové fotografie</h4>
                </div>
            </div>

        </div>

    </section>

<?php require_once('components/footer.php'); ?>