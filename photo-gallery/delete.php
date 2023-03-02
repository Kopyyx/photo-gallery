<?php
require_once "dbConfig.php";
$tb = "";
$url = $_SERVER["HTTP_REFERER"];

if (str_contains($url, "hockey")) {
    $tb = "hockey_photos";
} elseif (str_contains($url, "couple")) {
    $tb = "couple_photos";
} elseif (str_contains($url, "group")) {
    $tb = "group_photos";
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];

    // Smazání fotky z databáze
    $sql = "DELETE FROM $tb WHERE name = '$name'";
    mysqli_query($conn, $sql);

    // Smazání fotky ze složky
    $file_path = "uploads/" . $name;
    unlink($file_path);

    header("Location: $url");
}
