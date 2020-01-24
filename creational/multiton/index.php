<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once './vendor/autoload.php';

$multiton[] = App\SimpleMultiton::getInstance('mysql')->setTest('mysql-test');
$multiton[] = App\SimpleMultiton::getInstance('mongo');
$multiton[] = App\SimpleMultiton::getInstance('mysql');
$multiton[] = App\SimpleMultiton::getInstance('mongo')->setTest('mongo-test');

var_dump($multiton);
