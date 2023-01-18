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

    // Return compressed image
    return $destination;
}
function convert_filesize($bytes, $decimals = 2) {
    $size = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}
// File upload path
$uploadPath = "E:\Projects\photo-gallery\photo-gallery\photos";

$statusMsg = '';
$status = 'danger';

// If file upload form is submitted
if(isset($_POST["submit"])){
    // Check whether user inputs are empty
    if(!empty($_FILES["image"]["name"])) {
        // File info
        $fileName = basename($_FILES["image"]["name"]);
        $imageUploadPath = $uploadPath . $fileName;
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            // Image temp source and size
            $imageTemp = $_FILES["image"]["tmp_name"];
            $imageSize = convert_filesize($_FILES["image"]["size"]);

            // Compress size and upload image
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 75);

            if($compressedImage){
                $compressedImageSize = filesize($compressedImage);
                $compressedImageSize = convert_filesize($compressedImageSize);

                $status = 'success';
                $statusMsg = "Image compressed successfully.";
            }else{
                $statusMsg = "Image compress failed!";
            }
        }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    }else{
        $statusMsg = 'Please select an image file to upload.';
    }
}
 echo $statusMsg;

$insert = $conn->query("INSERT into images (image, created) VALUES ('$compressedImage', NOW())");
/*
if($insert){
    $status = 'success';
    $statusMsg = "File uploaded successfully.";
}
else
{
    $statusMsg = "File upload failed, please try again.";
}
else
{
    $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
}
else{
    $statusMsg = 'Please select an image file to upload.';
}*/

/*
$status = $statusMsg = '';
if(isset($_POST["submit"])){
$status = 'error';
if(!empty($_FILES["image"]["name"])) {
$fileName = basename($_FILES["image"]["name"]);
$fileType = pathinfo($fileName, PATHINFO_EXTENSION);


$allowTypes = array('jpg','png','jpeg','gif');
if(in_array($fileType, $allowTypes)){
$image = $_FILES['image']['tmp_name'];
$imgContent = addslashes(file_get_contents($image));

$insert = $conn->query("INSERT into images (image, created) VALUES ('$compressedImage', NOW())");

if($insert){
$status = 'success';
$statusMsg = "File uploaded successfully.";
}else{
$statusMsg = "File upload failed, please try again.";
}
}else{
$statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
}
}else{
$statusMsg = 'Please select an image file to upload.';
}
}*/
