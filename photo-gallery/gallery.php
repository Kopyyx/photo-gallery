<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- navbar -->
    <title>Document</title>
</head>

<body style="background: #111111">
<section class="home">
    <?php
    require_once ('nav.php');
    ?>
    <div class="container kontainer h-100 d-flex">
        <div class="row d-flex justify-content-center">
            <div class="col-10 col-sm-12 col-md-4 text-center py-4">
                <h3 class="test20">GALLERY</h3>
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-8 col-sm-12 col-md-4 text-center py-4">
                <img class="test3" src="photos/hockey3.jpg">
                <h2 class="overlay2">Hokej</h2>
            </div>
            <div class="col-8 col-sm-12 col-md-4 text-center py-4"><!--<h2 class="overlay2">Hokej</h2>--><img
                    class="test3"
                    src="photos/hockey7.jpg">
                <h2 class="overlay2">Hokej</h2>
            </div>
            <div class="col-8 col-sm-12 col-md-4 text-center py-4"><!--<h2 class="overlay2">Hokej</h2>--><img
                    class="test3"
                    src="photos/hockey2.jpg">
                <h2 class="overlay2">Hokej</h2>
            </div>
        </div>

    </div>

</section>

<?php
require_once ('footer.php');
?>

<script src="javascript.js"></script>

</body>

</html>