<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once './vendor/autoload.php';

$obj1 = App\Singleton::getInstance();
$obj2 = App\Singleton::getInstance();

var_dump($obj1);
var_dump($obj2);