<?php
$path = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/style.css" : "style.css";
$logo = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/icons/logo_bg.png" : "icons/logo_bg.png";
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fotogalerie Michaeli Halíkové. Hokejové, skupinové a párové fotografie. Kontaktujte mě a ráda Vás vyfotím"/>
    <link rel="icon" href=<?php echo $logo;?>>
    <link rel="stylesheet" href="<?php echo $path ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- navbar -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> <!-- popup login -->
    <link href="lightbox/css/lightbox.css" rel="stylesheet"/>
    <script src="lightbox/js/lightbox.js"></script>
    <title>Fotogalerie</title>
</head>
<body>