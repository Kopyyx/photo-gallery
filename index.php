<?php require_once('photo-gallery/components/head.php'); ?>
    <section class="home">
        <?php require_once('photo-gallery/components/nav.php'); ?>
        <div class="overlay_home" id="introduction"><h1>FOTOGALERIE</h1>
            <h2>MICHAELA HALÍKOVÁ</h2></div>
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
                    <img src="photo-gallery/photos/hockey2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="photo-gallery/photos/hockey4.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="photo-gallery/photos/hockey3.jpg" class="d-block w-100">
                </div>
            </div>
        </div>
    </section>
<?php require_once('photo-gallery/components/footer.php'); ?>
<?php require_once("photo-gallery/login.php"); ?>