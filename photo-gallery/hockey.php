<?php
require_once('components/head.php');
require_once('components/nav.php');

require_once "dbConfig.php";

$sql = "SELECT * FROM hockey_photos ORDER BY id ASC";
$result = mysqli_query($conn, $sql);

if (!isset($_SESSION["loggedIn"])) {
$_SESSION["loggedIn"] = false;
}

$button = "<button type='button' class='btn btn-primary admin_add_button' data-bs-toggle='modal' data-bs-target='#image_upload'>+</button>";
?>

<section class="opening-bg-hockey">
    <h4 class="gallery_title text-center">HOKEJ</h4>
</section>

<section class="gallery">
    <div class="gallery_container">
        <ul class="image-gallery d-flex align-items-center flex-wrap">
            <?php
            // Cyklus pro zobrazení jednotlivých fotografií
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                        if ($_SESSION["loggedIn"]){
                          echo "  <li><form method='post' action='delete.php'>
                    <input type='hidden' name='name' value='" . $row['name'] . "'>
                    <div class='overlay_container'>
                        <img src='uploads/" . $row['name'] . "' alt='" . $row['name'] . "' loading='lazy'/>
                        <div class='overlay d-flex justify-content-center align-items-center'>
                            <a href='delete.php'>
                                <input type='image' class='trash' src='icons/trash.svg'>
                            </a>
                        </div>
                    </div>
                    </form>
                    </li>";
                        }else{
                            echo "<li class='list'><img class='image' src='photos/" . $row['name'] . "' alt='" . $row['name'] . "' loading='lazy'/></li>";
                        }
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