<?php

if (!isset($_POST['login_button'])) {
    exit;
}

$logins = array(
    'Admin' => '123456',
);

$username = $_POST['Username'];
$password = $_POST['Password'];

if (isset($logins[$username]) && $logins[$username] == $password) {
    echo '<body>
            <h2>Logged in</h2>
        </body>';
    exit();
}

$errorMessage = "<span style='color:red'>Invalid Login Details</span>";
echo $errorMessage;