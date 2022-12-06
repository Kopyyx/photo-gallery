<nav class="nav">
    <div class="container-fluid">
        <div class="logo">
            <a href="../index.php">Logo</a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a class="link" href="../index.php">Home</a></li>
                <li><a class="link" href="<?php echo ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/gallery.php" : "gallery.php" ?>">Gallery</a></li>
                <li><a class="link" href="<?php echo ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/about.php" : "about.php" ?>">About</a></li>
                <div class="social-icons-nav">
                    <li><a href="#">
                            <img src="<?php echo ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/instagram-white.svg" : "icons/instagram-white.svg" ?>" alt="instagram-white-logo"/>
                        </a></li>
                    <li><a href="#">
                            <img src="<?php echo ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/facebook-white.svg" : "icons/facebook-white.svg" ?>" alt="facebook-white-logo"/>
                        </a></li>
                    <li><a href="#myModal" data-toggle="modal">
                            <img class="login-icon" src="<?php echo ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/login-icon.svg" : "icons/login-icon.svg" ?>" alt="login-white-logo"/>
                        </a></li>
                </div>

            </ul>
        </div>
        <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
    </div>
</nav>