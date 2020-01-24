<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once './vendor/autoload.php';

$lazyLoad = new App\LazyInitialization();

$users[] = $lazyLoad->getUser()->name;
$users[] = $lazyLoad->getUser()->email;
$users[] = $lazyLoad->getUser()->motto;

var_dump($users);