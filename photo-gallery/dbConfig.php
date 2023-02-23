<?php
$servername = "localhost";
$db_name = "web_database";
$db_username = "root";
$db_password = "";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    header("Location: index.php");
}
//echo "Connected successfully";