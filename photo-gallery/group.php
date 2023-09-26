<?php
require_once('components/head.php');
require_once('components/nav.php');

require_once "dbConfig.php";

$sql = "SELECT * FROM group_photos ORDER BY id ASC";
$result = mysqli_query($conn, $sql);

if (!isset($_SESSION["loggedIn"])) {
    $_SESSION["loggedIn"] = false;
}

$button = "<img src='icons/add-button.svg' class='admin_add_button' data-bs-toggle='modal' data-bs-target='#image_upload'>";
?>

    <section class="opening-bg-group">
        <h4 class="gallery_title text-center cs" lang="cs">Skupinové fotografie</h4>
        <h4 class="gallery_title text-center en" lang="en">Group photos</h4>
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
                            echo "<li class='list'><a href='uploads/" . $row['name'] . "'data-lightbox='hockey'><img class='image' src='uploads/" . $row['name'] . "' alt='" . $row['name'] . "' loading='lazy'/></a></li>";
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