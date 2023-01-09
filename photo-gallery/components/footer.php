<?php
$path =($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/javascript.js" : "javascript.js" ;
$instagram_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/instagram-white.svg" : "icons/instagram-white.svg";
$facebook_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/facebook-white.svg" : "icons/facebook-white.svg";
?>

<footer class="text-center" id="footer">
    <div class="footer-icons">
        <a href="https://www.instagram.com/mh.shutterbug" target="_blank"><img class="social-icons-footer" src="<?php echo $instagram_icon_path  ?>" alt="instagram-white-logo"/></a>
        <img class="social-icons-footer" src="<?php echo $facebook_icon_path  ?>" alt="facebook-white-logo"/>
    </div>
</footer>

<script src="<?php echo $path?>"></script>

</body>

</html>