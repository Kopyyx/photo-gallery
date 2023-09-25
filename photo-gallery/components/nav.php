<?php
$instagram_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/instagram-white.svg" : "icons/instagram-white.svg";
$facebook_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/facebook-white.svg" : "icons/facebook-white.svg";
$user_icon_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/user-icon.svg" : "icons/user-icon.svg";

$login_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/login-icon.svg" : "icons/login-icon.svg";
$logout_path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/logout-icon.svg" : "icons/logout-icon.svg";

$logout = ($_SERVER["REQUEST_URI"] == "/index.php") ? 'window.location = \'photo-gallery/logout.php\';' : 'window.location = \'logout.php\';';

$change = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/change.php" : "change.php";

$logo = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/logo.png" : "icons/logo.png";

session_start();

if (!isset($_SESSION["loggedIn"])) {
    $_SESSION["loggedIn"] = false;
}
$password_change = "<li><a data-bs-toggle='modal' data-bs-target='#change_password'>Změna hesla</a></li>";
?>


<nav class="nav">
    <div class="container-fluid">
            <a href="../../index.php">
                <img class="logo" src=<?php echo $logo;?> alt="logo">
            </a>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a id="link-home" data-page="index.php">Domů</a></li>
                <li><a id="link-gallery" data-page="photo-gallery/gallery.php">Galerie</a></li>
                <li><a id="link-about" data-page="photo-gallery/about.php">O mně</a></li>
                <li id="en"><a href="#"  onclick="changeLang('en')">En</a></li>
                <li id="cs"><a href="#"  onclick="changeLang('cs')">Cs</a></li>
                <?php if ($_SESSION["loggedIn"]){echo $password_change;} ?>
                <div class="social-icons-nav">
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
                <h4 class="modal-title">Příhlášení</h4>
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

<div class="modal fade" id="image_upload" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title fs-1 modal_title w-100" id="staticBackdropLabel">Nahrání fotek</h1>
                <button type="button" class="btn-close close_button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="modal-body d-flex justify-content-center">

                    <img id="upload_image"/>
                    <input type="file" name="image" class="file_upload"
                           onchange="document.getElementById('upload_image').src = window.URL.createObjectURL(this.files[0]); this.style.display = 'none';">
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-danger btn-lg"
                        onclick="document.getElementById('upload_image').src = ''; document.querySelector('.file_upload').style.display = 'block';">
                    Smazat
                </button>
                <button type="submit" name="submit" class="btn btn-success btn-lg">Nahrát</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="change_password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title fs-1 modal_title w-100" id="staticBackdropLabel">Změna hesla</h1>
                <button type="button" class="btn-close close_button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form action=<?php echo $change;?> method="post" enctype="multipart/form-data">
                <div class="modal-body d-flex align-items-center flex-column">
                    <div class="password_change_text">Staré heslo</div>
                    <input class="password_change" type="password" maxlength="20" name="old_password"><!--<img src="icons/eye-close.png" alt="eye-closed">-->
                    <div class="password_change_text">Nové heslo</div>
                    <input class="password_change" type="password" maxlength="20" name="new_password"><!--<img src="../icons/eye-close.png" alt="eye-closed">-->
                    <div class="password_change_text">Potvrzení nového hesla</div>
                    <input class="password_change" type="password" maxlength="20" name="confirm"><!--<img src="../icons/eye-close.png" alt="eye-closed">-->
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Uložit</button>
                </div>
            </form>
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
