<?php
require_once "dbConfig.php";
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

$new_password = $_POST["new_password"];
$old_password = $_POST["old_password"];
$comfirm = $_POST["comfirm"];


if ($old_password == $decryptedPassword && $new_password == $comfirm) {
    if ($old_password == $new_password) {
        echo "Nově zadané heslo se shoduje se startýn heslem";
    }
    $new = data_encrypt($new_password);
    $sql = $conn->query("update admin_login set password='" . $new . "' where id=1");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}else{
    echo "chyba";
}