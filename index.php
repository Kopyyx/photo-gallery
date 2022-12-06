<?php session_start();
ob_start(); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="photo-gallery/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- navbar -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- popup login -->
        <title>Document</title>
    </head>
    <body>
    <section class="home">
        <?php
        require_once('photo-gallery/nav.php');
        ?>

        <div class="overlay" id="introduction"><h1>FOTOGALERIE</h1>
            <h2>MICHAELA HALÍKOVÁ</h2></div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                        class=""
                        aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                        class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="photo-gallery/photos/hockey2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="photo-gallery/photos/hockey4.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="photo-gallery/photos/hockey3.jpg" class="d-block w-100">

                </div>
            </div>
        </div>
    </section>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"/>
                                <path d="M20 22H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12z"/>
                            </g>
                        </svg>
                    </div>
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ico-times"
                                                                                                   role="img"
                                                                                                   aria-label="Cancel"></i>
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

    <?php
    require_once ('photo-gallery/footer.php');
    ?>

    <script src="photo-gallery/javascript.js"></script>

    </body>

    </html>

<?php

require("photo-gallery/login.php");

?>