<?php require_once('components/head.php');
require_once('components/nav.php');

$button = " <button type='button' class='btn btn-primary admin_add_button' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>+</button>";
?>
<section class="opening-bg-couple" >
    <h4 class="gallery_title text-center">PÁROVÉ FOTOGRAFIE</h4>
</section>

<section class="gallery">
    <div class="gallery_container">
        <ul class="image-gallery d-flex align-items-center flex-wrap">
            <li>
                <img src="photos/couple4.jpg" alt="hockey-photo" loading="lazy"/>
            </li>
            <li>
                <img src="photos/couple1.jpg" alt="hockey-photo" loading="lazy"/>
            </li>
            <li>
                <img src="photos/couple4.jpg" alt="hockey-photo" loading="lazy"/>
            </li>
            <li>
                <img src="photos/couple2.jpg" alt="hockey-photo" loading="lazy"/>
            </li>
            <?php if ($_SESSION["loggedIn"]) echo $button ?>
        </ul>
    </div>

</section>

<?php require_once('components/footer.php');  ?>

