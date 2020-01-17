<?php


namespace App;


use App\Interfaces\EventChanelInterface;
use App\Interfaces\SubscriberInterface;

class EventChannel implements EventChanelInterface
{
    /**
     * @var array
     */
    private $topics = [];

    /**
     * @param string $channel
     * @param $data
     *
     * @return mixed
     */
    public function publish($channel, $data)
    {
        if(empty($this->topics[$channel])) {
            //there is no subscribers
            return false;
        }

        foreach ($this->topics[$channel] as $subscriber) {
            $subscriber->notify($data);
        }
    }

    /**
     * @param string $channel
     * @param SubscriberInterface $subscriber
     *
     * @return mixed
     */
    public function subscribe($channel, SubscriberInterface $subscriber)
    {
        $this->topics[$channel][] = $subscriber;
        echo $subscriber->getName() . " successfully subscribed on " . $channel . "<br />";
    }
}