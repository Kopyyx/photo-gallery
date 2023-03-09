<?php
require "dbConfig.php";
session_start();
$url = $_SERVER["HTTP_REFERER"];
$_SESSION["loggedIn"] = false;

function data_decrypt($data)
{
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = "E2A94EAA4B249C57D95AC84BF5897";
    $secret_iv = 'RgUkXp2s5u8x/A?D(G+KbPeShVmYq3t6w9y$B&E)H@McQfTjWnZr4u7x!A%C*F-J';

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    $output = openssl_decrypt(base64_decode($data), $encrypt_method, $key, 0, $iv);

    return $output;

}

function redirect($url)
{
    header('Location: ' . $url);
    die();
}

$database_password = mysqli_query($conn, "SELECT password, username FROM admin_login");
$result = mysqli_fetch_array($database_password);
$user_password = $result ["password"];
$user_username = $result ["username"];
$decryptedPassword = data_decrypt($user_password);

if ($_POST["username"] == $user_username && $_POST["password"] == $decryptedPassword) {
    $_SESSION["loggedIn"] = true;
    redirect("/index.php");
} else {
    echo "<script>alert('Špatné uživatelské jméno, nebo heslo')</script>";
    echo "<script>window.location.replace('$url');</script>";
}