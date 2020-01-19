<?php


namespace App;


use App\Interfaces\MessengerInterface;
use App\Interfaces\MessengerStaticFactoryInterface;

class StaticFactory implements MessengerStaticFactoryInterface
{
    public static function build (string $type = 'email') :MessengerInterface
    {
        $messenger = new AppMessenger();

        switch ($type) {
            case 'email':
                $messenger->toEmail();
                $sender = 'admin@test.ru';
                break;
            case 'sms':
                $messenger->toSms();
                $sender = '+11111111111';
                break;
            default:
                throw new \Exception("Неизвестный тип - " . $type);
        }

        $messenger
            ->setSender($sender)
            ->setMessage('default message');

        return $messenger;
    }
}