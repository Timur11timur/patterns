<?php


namespace App;


use App\Interfaces\MessengerInterface;
use App\Interfaces\MessengerSimpleFactoryInterface;
use Messenger\Realisations\EmailMessenger;

class SimpleFactory implements MessengerSimpleFactoryInterface
{
    /**
     * @param string $type
     *
     * @return MessengerInterface
     * @throws \Exception
     */
    public function build(string $type): MessengerInterface
    {
        switch ($type) {
            case 'email':
                $messenger = new EmailMessenger();
                $messenger
                    ->setSender('admin@test.ru')
                    ->setMessage('Default Email message');
                break;
            case 'sms':
                $messenger = new SmsMessenger();
                $messenger
                    ->setSender('+11111111111')
                    ->setMessage('Default Phone message');
                break;
            default:
                throw new \Exception("Неизвестный тип - " . $type);
        }

        return $messenger;
    }
}