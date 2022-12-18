<?php

$instagram_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/instagram-white.svg" : "icons/instagram-white.svg";
$facebook_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/facebook-white.svg" : "icons/facebook-white.svg";
$user_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/user-icon.svg" : "icons/user-icon.svg";

$login_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/login-icon.svg" : "icons/login-icon.svg";
?>

<nav class="nav">
    <div class="container-fluid">
        <div class="logo">
            <a href="../../index.php">Logo</a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a class="link" id="link-home" data-page="index.php">Domů</a></li>
                <li><a class="link"  id="link-gallery" data-page="photo-gallery/gallery.php">Galerie</a></li>
                <li><a class="link"  id="link-about" data-page="photo-gallery/about.php">O mně</a></li>
                <div class="social-icons-nav">
                    <li><a href="https://www.instagram.com/mh.shutterbug/" target="_blank">
                            <img src="<?php echo $instagram_icon_path ?>" alt="instagram-white-logo"/>
                        </a></li>
                    <li><a href="#">
                            <img src="<?php echo $facebook_icon_path ?>" alt="facebook-white-logo"/>
                        </a></li>
                    <li><a href="#myModal" data-toggle="modal">
                            <img class="login-icon" src="<?php echo $login_path ?>" alt="login-white-logo"/>
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

<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="<?php echo $user_icon_path ?>" alt="user-black-icon"/>
                </div>
                <h4 class="modal-title">Příhlášení</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ico-times"
                                                                                               role="img" aria-label="Cancel"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="Username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="Password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block login-btn">
                            Příhlásit se
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const linkHome = document.getElementById("link-home");
    const linkGallery = document.getElementById("link-gallery");
    const linkAbout = document.getElementById("link-about");

    linkHome.addEventListener("click", redirect);
    linkGallery.addEventListener("click", redirect);
    linkAbout.addEventListener("click", redirect);

    function redirect() {
        const baseUrl = "http:/localhost:8000/";
        let page = this.getAttribute("data-page");
        window.history.pushState({}, document.title, "/");
        window.location.href = page;
    }
</script>