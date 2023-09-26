<?php
$instagram_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/instagram-white.svg" : "icons/instagram-white.svg";
$facebook_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/facebook-white.svg" : "icons/facebook-white.svg";
$user_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/user-icon.svg" : "icons/user-icon.svg";

$login_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/login-icon.svg" : "icons/login-icon.svg";
$logout_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/logout-icon.svg" : "icons/logout-icon.svg";

$logout = ($_SERVER["REQUEST_URI"] == "/index.php") ? 'window.location = \'photo-gallery/logout.php\';' : 'window.location = \'logout.php\';';

$change = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/change.php" : "change.php";

$url = ($_SERVER['REQUEST_URI'] == "/index.php") ? "/index.php" : "photo-gallery/gallery.php";
$url_0 = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/" : "";


$logo = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/logo.png" : "icons/logo.png";

$edit_bg_button = ($_SERVER['REQUEST_URI'] == "/index.php") ? "<li><img src='photo-gallery/icons/pen.svg' class='social-icons-nav' data-toggle='modal' data-target='#edit_bg_modal'></li>" : "<li><img src='icons/pen.svg' class='social-icons-nav' data-toggle='modal' data-target='#edit_bg_modal'></li>";
$edit_text_button = "<li><img src='icons/pen.svg' class='social-icons-nav' data-toggle='modal' data-target='#edit_modal'></li>";

session_start();
if (!isset($_SESSION["loggedIn"])) {
    $_SESSION["loggedIn"] = false;
}
$password_change = "<li><a data-bs-toggle='modal' data-bs-target='#change_password'>Změna hesla</a></li>";
?>


<nav class="nav">
    <div class="container-fluid">
        <a href="../../index.php">
            <img class="logo" src=<?php echo $logo; ?> alt="logo">
        </a>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li class="cs"><a class="link-home" data-page="index.php" lang="cs">Domů</a></li>
                <li class="en"><a class="link-home" data-page="index.php" lang="en">Home</a></li>
                <li class="cs"><a class="link-gallery" data-page="photo-gallery/gallery.php" lang="cs">Galerie</a></li>
                <li class="en"><a class="link-gallery" data-page="photo-gallery/gallery.php" lang="en">Gallery</a></li>
                <li class="cs"><a class="link-about" data-page="photo-gallery/about.php" lang="cs">O mně</a></li>
                <li class="en"><a class="link-about" data-page="photo-gallery/about.php" lang="en">About me</a></li>
                <li><a href="#" id="lang" onclick="changeLang()">Cs</a></li>
                <?php if ($_SESSION["loggedIn"]) {
                    echo $password_change;
                } ?>
                <div class="social-icons-nav d-flex">
                    <?php if ($_SESSION["loggedIn"] && str_contains($_SERVER["REQUEST_URI"], "$url" ))
                        echo $edit_bg_button;
                     ?>
                    <li><a href="https://www.instagram.com/mh.shutterbug/?theme=dark" target="_blank">
                            <img src="<?php echo $instagram_icon_path ?>" alt="instagram-white-logo"/>
                        </a></li>
                    <li><a href="#">
                            <img src="<?php echo $facebook_icon_path ?>" alt="facebook-white-logo"/>
                        </a></li>
                    <li>
                        <a href="<?php echo ($_SESSION["loggedIn"]) ? "#" : "#myModal"; ?>" data-toggle='modal'
                           onclick="<?php if ($_SESSION["loggedIn"]) {
                               echo $logout;
                           } ?>">
                            <img class="login-icon" src="<?php if ($_SESSION["loggedIn"]) {
                                echo $logout_path;
                            } else {
                                echo $login_path;
                            } ?>" alt="login-white-logo"/>
                        </a>
                    </li>
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
                <h4 class="modal-title">Administrace</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ico-times"
                                                                                               role="img"
                                                                                               aria-label="Cancel"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="../photo-gallery/login.php" method="post" name="form">
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login_button" class="btn btn-primary btn-lg btn-block login-btn">
                            Příhlásit se
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if ($_SESSION["loggedIn"] && str_contains($_SERVER["REQUEST_URI"], "$url_0"))
    require_once "modals.php";
else
    require_once "photo-gallery/modals.php";
?>




<script>
    const linkHome = document.getElementsByClassName("link-home");
    const linkGallery = document.getElementsByClassName("link-gallery");
    const linkAbout = document.getElementsByClassName("link-about");

    for (let i = 0; i <= 1; i++) {

        linkHome[i].addEventListener("click", redirect);
        linkGallery[i].addEventListener("click", redirect);
        linkAbout[i].addEventListener("click", redirect);
    }


    function redirect() {
        const baseUrl = "http:/localhost:8000/";
        let page = this.getAttribute("data-page");
        window.history.pushState({}, document.title, "/");
        window.location.href = page;
    }
</script>
