<?php

session_start();
$_SESSION["loggedIn"] = false;

function redirect($url)
{
    header('Location: ' . $url);
    die();
}
redirect("/index.php");
