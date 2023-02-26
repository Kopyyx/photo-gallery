<?php
require_once('components/head.php');
require_once('components/nav.php');

require_once "dbConfig.php";

$sql = "SELECT * FROM couple_photos ORDER BY id ASC";
$result = mysqli_query($conn, $sql);

$button = "<button type='button' class='btn btn-primary admin_add_button' data-bs-toggle='modal' data-bs-target='#image_upload'>+</button>";
?>

<section class="opening-bg-couple">
    <h4 class="gallery_title text-center">Párové fotografie</h4>
</section>

<section class="gallery">
    <div class="gallery_container">
        <ul class="image-gallery d-flex align-items-center flex-wrap">
            <?php
            // Cyklus pro zobrazení jednotlivých fotografií
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li><img src='photos/" . $row['name'] . "' alt='" . $row['name'] . "' loading='lazy'/></li>";
                }
            }
            if ($_SESSION["loggedIn"]) echo $button;
            ?>
        </ul>
    </div>
</section>
<?php
require_once('components/footer.php');
?>
