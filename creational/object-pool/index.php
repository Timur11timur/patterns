<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once './vendor/autoload.php';

try {
    $messenger1 = App\StaticFactory::build('email');
    $messenger2 = App\StaticFactory::build('sms');
    $messenger3 = App\StaticFactory::build('pigeon');
} catch (\Exception $e) {
    echo $e->getMessage() . "<hr />";
}

$messenger1->send();
$messenger2->send();