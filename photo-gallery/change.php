<?php
require_once "dbConfig.php";

$url = $_SERVER["HTTP_REFERER"];

function data_encrypt($data)
{
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = "E2A94EAA4B249C57D95AC84BF5897";
    $secret_iv = 'RgUkXp2s5u8x/A?D(G+KbPeShVmYq3t6w9y$B&E)H@McQfTjWnZr4u7x!A%C*F-J';

    // hash
    $key = hash('sha256', $secret_key);

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

    $key = hash('sha256', $secret_key);

    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    $output = openssl_decrypt(base64_decode($data), $encrypt_method, $key, 0, $iv);

    return $output;

}
$database_password = mysqli_query($conn, "SELECT password FROM admin_login");
$result = mysqli_fetch_array($database_password);
$user_password = $result ["password"];
$decryptedPassword = data_decrypt($user_password);

$new_password = $_POST["new_password"];
$old_password = $_POST["old_password"];
$confirm = $_POST["confirm"];

if ($old_password == $decryptedPassword){
    if ($decryptedPassword == $new_password && $decryptedPassword == $confirm){
        echo "<script>alert('Nové heslo nemůže být stejné jako staré heslo');</script>";
        echo "<script>window.location.replace('$url');</script>";
    }
    elseif($new_password == $confirm){
        $new = data_encrypt($new_password);
        $sql = $conn->query("update admin_login set password='" . $new . "' where id=1");
        echo "<script>alert('Heslo je úspěšně změněno');</script>";
        echo "<script>window.location.replace('$url');</script>";
    }else{
        echo "<script>alert('Nová hesla se neshodují');</script>";
        echo "<script>window.location.replace('$url');</script>";
    }
}
else{
    echo "<script>alert('Špatně zadané současné heslo');</script>";
    echo "<script>window.location.replace('$url');</script>";
}