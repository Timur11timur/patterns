<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once './vendor/autoload.php';

$obj = new App\PropertyContainer();

$obj->addProperty('view_count', 100);

$obj->addProperty('last_update', '2020-01-01');
$obj->setPropertyValue('last_update', '2020-02-02');

$obj->addProperty('read_only', true);
$obj->deleteProperty('read_only');

echo "<pre>";
print_r($obj);
echo "</pre>";