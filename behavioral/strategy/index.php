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
        'position' => 'courierAuto'
    ],
    [
        'name' => 'Larisa',
        'age' => 55,
        'position' => 'logist'
    ],
    [
        'name' => 'Ivan',
        'age' => 30,
        'position' => 'courierHiking'
    ],
    [
        'name' => 'Vera',
        'age' => 21,
        'position' => 'florist'
    ]
];

try {
    $result = (new App\SalaryManager($period, $users))->handle();
} catch (\Exception $e) {
    echo $e->getMessage() . "<hr />";
}

var_dump($result);