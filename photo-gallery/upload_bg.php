<?php

require_once 'dbConfig.php';
$uploadPath = "uploads/";
$statusMsg = '';
$url = $_SERVER["HTTP_REFERER"];

function compressImage($source, $destination, $quality)
{
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];
    switch ($mime) {
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

if (isset($_POST["submit"])) {
    if (!empty($_FILES["image"]["name"])) {

        $fileName = basename($_FILES["image"]["name"]);
        $imageUploadPath = $uploadPath . $fileName;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {

            $imageTemp = $_FILES["image"]["tmp_name"];
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 25);
            if ($compressedImage) {

                $compressedImageSize = filesize($compressedImage);
            }
        }
    }
}

if (str_contains($_SERVER['HTTP_REFERER'], "/index.php"))
    $tb = "photo_bg_index";
else
    $tb = "photo_bg_gallery";

$selectOption = $_POST['option'];
$name = $_FILES["image"]["name"];

if (isset($_POST["submit"])) {
    if (!empty($_FILES["image"]["name"])) {
        $sql = "UPDATE $tb SET name='$name' WHERE id = '$selectOption'";
        $stmt = $conn->prepare($sql);
        //$stmt->bind_param('s', $fileName);
        if ($stmt->execute()) {
            $statusMsg = "Nahrání proběhlo úspěšně.";
        } else {
            $statusMsg = "Chyba při nahrávání do databáze.";
        }

        echo "<script>alert('$statusMsg');</script>";

        echo "<script>window.location.replace('$url');</script>";
        mysqli_close($conn);
        exit();
    }
}
