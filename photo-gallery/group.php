<?php require_once('components/head.php');
require_once('components/nav.php');

$button = " <button type='button' class='btn btn-primary admin_add_button' data-bs-toggle='modal' data-bs-target='#image_upload'>+</button>";
?>
<section class="opening-bg-group" >
    <h4 class="gallery_title text-center">SKUPINOVÉ FOTOGRAFIE</h4>
</section>

<section class="gallery">
    <div class="gallery_container">
        <ul class="image-gallery d-flex align-items-center flex-wrap">
            <li>
                <img src="photos/group4.jpg" alt="hockey-photo" loading="lazy"/>
            </li>
            <li>
                <img src="photos/group1.jpg" alt="hockey-photo" loading="lazy"/>
            </li>
            <li>
                <img src="photos/group4.jpg" alt="hockey-photo" loading="lazy"/>
            </li>
            <li>
                <img src="photos/group1.jpg" alt="hockey-photo" loading="lazy"/>
            </li>
            <?php if ($_SESSION["loggedIn"]) echo $button ?>
        </ul>
    </div>

</section>

<?php require_once('components/footer.php');  ?>

