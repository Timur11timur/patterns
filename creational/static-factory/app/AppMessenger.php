<?php


namespace App;


use App\Interfaces\MessengerInterface;

class AppMessenger implements MessengerInterface
{
    private $sender;

    private $message;

    private $type;

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

    public function toEmail()
    {
        $this->type = 'email';
    }

    public function toSms()
    {
        $this->type = 'sms';
    }

    public function send()
    {
        echo "Sended message through ".  $this->type . ", from " . $this->sender . "<br />" . $this->message . "<hr />";
    }
}