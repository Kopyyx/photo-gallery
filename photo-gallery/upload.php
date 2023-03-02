<?php
// Include the database configuration file
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
function convert_filesize($bytes, $decimals = 2) {
    $size = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}
if(isset($_POST["submit"])) {
    if (!empty($_FILES["image"]["name"])) {
        // File info
        $fileName = basename($_FILES["image"]["name"]);
        $imageUploadPath = $uploadPath . $fileName;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // Image temp source and size
            $imageTemp = $_FILES["image"]["tmp_name"];
            $imageSize = convert_filesize($_FILES["image"]["size"]);

            $compressedImage = compressImage($imageTemp, $imageUploadPath, 75);

            if ($compressedImage) {
                $compressedImageSize = filesize($compressedImage);
                $compressedImageSize = convert_filesize($compressedImageSize);
            }
        }
    }
}

// If file upload form is submitted
if(isset($_POST["submit"])) {
    // Check whether user inputs are empty
    if (!empty($_FILES["image"]["name"])) {
        // File info
        $fileName = basename($_FILES["image"]["name"]);

        // Insert image information into database
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
            $status = "success";
        } else {
            $statusMsg = "Chyba při nahrávání do databáze :((";
        }

// Display alert with status message
        echo "<script>alert('$statusMsg');</script>";

// Redirect back to previous page
        echo "<script>window.location.replace('$url');</script>";
        exit();
    }
}