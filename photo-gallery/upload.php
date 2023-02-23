<?php
// Include the database configuration file
require_once 'dbConfig.php';
function compressImage($source, $destination, $quality) {
    // Get image info
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];

    // Create a new image from file
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

    // Save image
    imagejpeg($image, $destination, $quality);

    // Return compressed image
    return $destination;
}
function convert_filesize($bytes, $decimals = 2) {
    $size = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}
$uploadPath = "uploads/";

$statusMsg = '';
$status = 'danger';
$tb = "";
$url = $_SERVER["HTTP_REFERER"];

// If file upload form is submitted
if(isset($_POST["submit"])) {
    // Check whether user inputs are empty
    if (!empty($_FILES["image"]["name"])) {
        // File info
        $fileName = basename($_FILES["image"]["name"]);
        $imageUploadPath = $uploadPath . $fileName;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // Image temp source and size
            $imageTemp = $_FILES["image"]["tmp_name"];
            $imageSize = convert_filesize($_FILES["image"]["size"]);

            // Compress size and upload image
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 75);


            if ($compressedImage) {
                $compressedImageSize = filesize($compressedImage);
                $compressedImageSize = convert_filesize($compressedImageSize);

                if (str_contains($url, "hockey")){
                    $tb = "hockey_photos";
                }
                elseif(str_contains($url, "couple")){
                    $tb = "couple_photos";
                }
                elseif(str_contains($url, "group")){
                    $tb = "group_photos";
                }
                $insert = $conn->query("INSERT INTO ".$tb." (id, image) VALUES ('".$compressedImage."', NOW())");
                $statusMsg = "Komprese a nahrání proběhlo úspěšně.";
                echo "<script> window.location.replace('$url');alert('$statusMsg')</script>";
            } else {
                $statusMsg = "Chyba :((";
                echo "<script> window.location.replace('$url');alert('$statusMsg')</script>";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            echo "<script> window.location.replace('$url');alert('$statusMsg')</script>";
        }
    } else {
        $statusMsg = 'Please select an image file to upload.';
        echo "<script> window.location.replace('$url');alert('$statusMsg')</script>";
    }
}