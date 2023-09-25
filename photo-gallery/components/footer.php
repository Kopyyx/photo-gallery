<?php
$path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/javascript.js" : "javascript.js";
$instagram_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/instagram-white.svg" : "icons/instagram-white.svg";
$facebook_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/facebook-white.svg" : "icons/facebook-white.svg";
?>
<footer class="text-center" id="footer">
    <div class="footer-icons">
        <div class="footer_name">Michaela Halíková</div>
        <div class="footer_line">|</div>
        <a href="https://www.instagram.com/mh.shutterbug/?theme=dark" target="_blank"><img class="social-icons-footer"
                                                                                           src="<?php echo $instagram_icon_path ?>"
                                                                                           alt="instagram-white-logo"/></a>
        <img class="social-icons-footer" src="<?php echo $facebook_icon_path ?>" alt="facebook-white-logo"/>
    </div>
    <div class="footer_author">&#169; Kopecký 2022/23</div>
</footer>
<div class="loader-container">
    <div class="lds-ring d-flex justify-content-center align-items-center w-100 h-100"><div></div><div></div><div></div><div></div></div>
</div>

</body>
<script src="<?php echo $path ?>"></script>
<script>
    $(window).on("load", function () {
        $(".loader-container").fadeOut(500);
    });
</script>
</html>
