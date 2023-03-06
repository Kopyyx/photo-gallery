<?php
$servername = "localhost";
$db_name = "web_database";
$db_username = "root";
$db_password = "";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";