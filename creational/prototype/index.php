<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once './vendor/autoload.php';

$prototype = new App\Prototype();
$result = $prototype->run();

var_dump($result);