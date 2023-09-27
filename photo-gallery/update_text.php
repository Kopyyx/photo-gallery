<?php

require_once 'dbConfig.php';

$statusMsg = '';
$url = $_SERVER["HTTP_REFERER"];

if (isset($_POST["submit"])) {
    if (isset($_POST["text_cs"])){
        $id = 1;
        $text = $_POST["text_cs"];
    }
    else if (isset($_POST["text_en"])){
        $id = 2;
        $text = $_POST["text_en"];
    }
        $sql = "UPDATE text_about SET text='$text' WHERE id = '$id'";
        $stmt = $conn->prepare($sql);
        //$stmt->bind_param('s', $fileName);
        if ($stmt->execute()) {
            $statusMsg = "Změna textu proběhla úspěšně.";
        } else {
            $statusMsg = "Chyba při nahrávání do databáze.";
        }

        echo "<script>alert('$statusMsg');</script>";

        echo "<script>window.location.replace('$url');</script>";
        mysqli_close($conn);
        exit();
}
