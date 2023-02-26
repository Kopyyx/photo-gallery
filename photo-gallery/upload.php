<?php
// Include the database configuration file
require_once 'dbConfig.php';

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