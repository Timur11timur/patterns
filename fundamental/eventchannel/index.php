<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once './vendor/autoload.php';

$newsChannel = new App\EventChannel();

$theTimes = new App\Publisher('usual-news', $newsChannel);
$stopGameRu = new App\Publisher('game-news', $newsChannel);
$strategy = new App\Publisher('game-news', $newsChannel);
$bbc = new App\Publisher('bbc-news', $newsChannel);

$vlad = new App\Subscriber('Vlad');
$timur = new App\Subscriber('Timur');
$dima = new App\Subscriber('Dima');
$denis = new App\Subscriber('Denis');

$newsChannel->subscribe('usual-news', $vlad);

$newsChannel->subscribe('usual-news', $denis);
$newsChannel->subscribe('game-news', $denis);

$newsChannel->subscribe('game-news', $timur);

$newsChannel->subscribe('some-unknown-channel', $dima);

echo "<hr />";

$theTimes->publish('Dollar rate');
$stopGameRu->publish('New review');
$strategy->publish('New game');
$stopGameRu->publish('Review on new game');
$bbc->publish('BBC News');

echo "<hr />";

$newsChannel->subscribe('bbc-news', $dima);

$bbc->publish('BBC News2');


