<?php require_once("components/head.php"); ?>
    <section class="home">
        <?php require_once('components/nav.php'); ?>
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select Image File to Upload:
                <input type="file" name="image">
                <input type="submit" name="submit" value="Upload">
            </form>
        </div>


    </section>

<?php require_once('components/footer.php'); ?>