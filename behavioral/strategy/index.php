<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once './vendor/autoload.php';
$period = [
    '01012020',
    '31012020',
];

$users = [
    [
        'name' => 'Roy',
        'age' => 40,
        'position' => 'driver'
    ],
    [
        'name' => 'Larisa',
        'age' => 55,
        'position' => 'accounter'
    ],
    [
        'name' => 'Ivan',
        'age' => 30,
        'position' => 'courier'
    ],
];

$result = (new App\SalaryManager($period, $users))->handle();

var_dump($result);