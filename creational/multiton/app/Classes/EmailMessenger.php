<?php


namespace App\Classes;


use App\Interfaces\MessengerInterface;

class EmailMessenger implements MessengerInterface
{
    private $sender;

    private $message;

    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    public function send()
    {
        echo "Sended email, from " . $this->sender . "<br />" . $this->message . "<hr />";
    }
}