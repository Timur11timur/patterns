<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once './vendor/autoload.php';

$factory = new App\SimpleFactory();

try {
    $appMailMessenger =  $factory->build('email');
    $appPhoneMessenger = $factory->build('sms');
    $appPigeonMessenger = $factory->build('pigeon');
} catch (\Exception $e) {
    echo $e->getMessage() . "<hr />";
}

$appMailMessenger->send();
$appPhoneMessenger->send();