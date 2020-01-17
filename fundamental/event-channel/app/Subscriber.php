<?php


namespace App;


use App\Interfaces\SubscriberInterface;

class Subscriber implements SubscriberInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * Subscriber constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $data
     * @return mixed|void
     */
    public function notify($data)
    {
        echo $this->getName() . " has been notified with " . $data . "<br />";
    }
}