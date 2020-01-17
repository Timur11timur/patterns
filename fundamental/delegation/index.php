<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once './vendor/autoload.php';

$mes = new Messenger\Messenger();

$mes->setSender('sender@test.ru')
    ->setRecipient('recipient@test.ru')
    ->setMessage('E-mail message')
    ->send();

$mes->toSms()
    ->setSender('+11111111')
    ->setRecipient('+2222222')
    ->setMessage('SMS message')
    ->send();