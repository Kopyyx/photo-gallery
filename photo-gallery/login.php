<?php
    $servername = "localhost";
    $db_name = "login";
    $db_username = "root";
    $db_password = "";

    $conn = new mysqli($servername, $db_username, $db_password, $db_name);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";

    function data_encrypt($data)
    {
        $output = false;

        $encrypt_method = "AES-256-CBC";
        $secret_key = "E2A94EAA4B249C57D95AC84BF5897";
        $secret_iv = 'RgUkXp2s5u8x/A?D(G+KbPeShVmYq3t6w9y$B&E)H@McQfTjWnZr4u7x!A%C*F-J';

        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        $output = openssl_encrypt($data, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);

        return $output;
    }

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

    $database_password = mysqli_query($conn, "SELECT password, username FROM admin_login");
    $result = mysqli_fetch_array($database_password);
    $user_password = $result ["password"];
    $user_username = $result ["username"];
    $decryptedPassword = data_decrypt($user_password);

if ($_POST["username"] == $user_username && $_POST["password"] == $decryptedPassword){
    echo "logged in";
}else{
    echo "nope";
}
// insert into
/*
$encryptedPassword = data_encrypt($password);
$sql = "INSERT INTO admin_login (id, username, password)
VALUES ('NULL', '$username', '$encryptedPassword')";

$conn->exec($sql);
echo "New record created successfully";

$conn = null;*/