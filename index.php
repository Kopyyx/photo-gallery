<?php require_once('photo-gallery/components/head.php');
require_once('photo-gallery/components/nav.php');
require_once('photo-gallery/dbConfig.php');

?>
    <section class="home">
        <div class="overlay_home" id="introduction"><h1 class="cs" lang="cs">FOTOGALERIE</h1>
            <h1 class="en" lang="en">PHOTO GALLERY</h1>
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
                <?php $sql = "SELECT * FROM photo_bg_index ORDER BY id ASC";
                    $result = mysqli_query($conn, $sql);

                    $isFirst = true;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $photo = $row['name'];
                            if ($isFirst){
                                $isFirst = false;
                                echo "<div class='carousel-item active'>
                                <img src='photo-gallery/photos/".$photo."' class='d-block w-100'> </div> ";
                            }
                            else{
                                echo "<div class='carousel-item'>
                                <img src='photo-gallery/photos/".$photo."' class='d-block w-100'> </div> ";
                            }
                        }
                    }
                        ?>
            </div>
        </div>
    </section>
<?php require_once('photo-gallery/components/footer.php'); ?>