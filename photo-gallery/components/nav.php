<nav class="nav">
    <div class="container-fluid">
        <div class="logo">
            <a href="../../index.php">Logo</a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a class="link" href="../../index.php">Home</a></li>
                <li><a class="link" href="<?php echo ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/gallery.php" : "gallery.php" ?>">Gallery</a></li>
                <li><a class="link" href="<?php echo ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/about.php" : "about.php" ?>">About</a></li>
                <div class="social-icons-nav">
                    <li><a href="https://www.instagram.com/mh.shutterbug/" target="_blank">
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

<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="<?php echo ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/user-icon.svg" : "icons/user-icon.svg" ?>" alt="user-black-icon"/>
                </div>
                <h4 class="modal-title">Login</h4>
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
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>