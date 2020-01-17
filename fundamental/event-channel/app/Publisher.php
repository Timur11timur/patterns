<?php


namespace App;


use App\Interfaces\EventChanelInterface;
use App\Interfaces\PublisherInterface;

/**
 * Class Publisher
 * @package App
 */
class Publisher implements PublisherInterface
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @var EventChanelInterface
     */
    private $eventChannel;

    /**
     * Publisher constructor.
     * @param string $channel
     * @param EventChanelInterface $eventChannel
     */
    public function __construct($channel, EventChanelInterface $eventChannel)
    {
        $this->channel = $channel;

        $this->eventChannel = $eventChannel;
    }

    public function publish($data)
    {
        $this->eventChannel->publish($this->channel, $data);
    }
}