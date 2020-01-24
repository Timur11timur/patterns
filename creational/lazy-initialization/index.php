<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once './vendor/autoload.php';

$builder = new App\BlogPostBuilder();

$posts[] = $builder->setTitle('First post')
                    ->getBlogPost();

$posts[] = $builder->setTitle('Second post')
    ->setBody('Body of the second post')
    ->getBlogPost();

$manger = new \App\BlogPostManager();
$manger->setBuilder($builder);

$posts[] = $manger->createCleanPost();
$posts[] = $manger->createNewItPost();
$posts[] = $manger->createNewСatsPost();

var_dump($posts);