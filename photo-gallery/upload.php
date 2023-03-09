<?php
require_once 'dbConfig.php';
$uploadPath = "uploads/";
$statusMsg = '';
$tb = "";
$url = $_SERVER["HTTP_REFERER"];

function compressImage($source, $destination, $quality) {
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];
    switch($mime){
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($source);
            break;
        default:
            $image = imagecreatefromjpeg($source);
    }

    imagejpeg($image, $destination, $quality);

    return $destination;
}

if(isset($_POST["submit"])) {
    if (!empty($_FILES["image"]["name"])) {

        $fileName = basename($_FILES["image"]["name"]);
        $imageUploadPath = $uploadPath . $fileName;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {

            $imageTemp = $_FILES["image"]["tmp_name"];
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 10);
            if ($compressedImage) {

                $compressedImageSize = filesize($compressedImage);
            }
        }
    }
}
if(isset($_POST["submit"])) {

    if (!empty($_FILES["image"]["name"])) {

        $fileName = basename($_FILES["image"]["name"]);

        if (str_contains($url, "hockey")) {
            $tb = "hockey_photos";
        } elseif (str_contains($url, "couple")) {
            $tb = "couple_photos";
        } elseif (str_contains($url, "group")) {
            $tb = "group_photos";
        }
        $stmt = $conn->prepare("INSERT INTO $tb (name) VALUES (?)");
        $stmt->bind_param("s", $fileName);
        if ($stmt->execute()) {
            $statusMsg = "Nahrání proběhlo úspěšně.";
        } else {
            $statusMsg = "Chyba při nahrávání do databáze.";
        }
        echo "<script>alert('$statusMsg');</script>";

        echo "<script>window.location.replace('$url');</script>";
        exit();
    }
}