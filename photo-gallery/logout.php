<?php

session_start();
$_SESSION["loggedIn"] = false;

function redirect($url)
{
    echo "<script>alert('Odhlášeno');</script>";

    echo "<script>window.location.replace('$url');</script>";
    die();
}
redirect("/index.php");
