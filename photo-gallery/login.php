<?php

if ($_SERVER['REQUEST_URI'] == "/index.php"){
    $link = "photo-gallery/phplogin.php";
}
else{
    $link = "phplogin.php";
}

if (!isset($_POST['Submit'])) {
    exit;
}

$logins = array(
    'Admin' => '123456'
);

$username = $_POST['Username'];
$password = $_POST['Password'];

if (isset($logins[$username]) && $logins[$username] == $password) {
    header("location:" . $link);
    ob_end_flush();
    exit;
}

$errorMessage = "<span style='color:red'>Invalid Login Details</span>";
echo $errorMessage;
