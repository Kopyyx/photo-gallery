<?php require_once("components/head.php");
    require_once('components/nav.php');
require_once('dbConfig.php') ?>
    <section class="home">
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
                <?php $sql = "SELECT * FROM photo_bg_gallery ORDER BY id ASC";
                $result = mysqli_query($conn, $sql);
                $isFirst = true;
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $photo = $row['name'];
                        if ($isFirst){
                            $isFirst = false;
                            echo "<div class='carousel-item active'>
                                <img src='photos/".$photo."' class='d-block w-100'> </div> ";
                        }
                        else{
                            echo "<div class='carousel-item'>
                                <img src='photos/".$photo."' class='d-block w-100'> </div> ";
                        }
                    }
                }
                ?>
                <div class="container d-flex justify-content-center align-items-center" style="
                     height: 95vh">
                    <div class="row d-flex justify-content-center">
                        <div class="overlay_gallery_heading py-4">

                            <h3 class="page_title cs" lang="cs" >GALERIE</h3>
                            <h3 class="page_title en" lang="en">GALLERY</h3>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center overlay_gallery">
                        <div class="col-8 col-sm-10 col-md-4 text-center py-2">
                            <a href="hockey.php"><img class="gallery_photo" src="photos/hockey3.jpg"></a>
                            <h4 id="test" class="overlay2 cs" lang="cs">Hokej</h4>
                            <h4 id="test" class="overlay2 en" lang="en">Hockey</h4>
                        </div>
                        <div class="col-8 col-sm-10 col-md-4 text-center py-2"><!--<h2 class="overlay2">Hokej</h2>-->
                            <a href="couple.php"><img class="gallery_photo" src="photos/couple4.jpg"></a>
                            <h4 class="overlay2 cs" lang="cs"">Párové fotografie</h4>
                            <h4 class="overlay2 en" lang="en"">Couple photos</h4>
                        </div>
                        <div class="col-8 col-sm-10 col-md-4 text-center py-2"><!--<h2 class="overlay2">Hokej</h2>-->
                            <a href="group.php"><img class="gallery_photo" src="photos/group4.jpg"></a>
                            <h4 class="overlay2 cs" lang="cs"">Skupinové fotografie</h4>
                            <h4 class="overlay2 en" lang="en"">Group Photos</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php require_once('components/footer.php'); ?>

