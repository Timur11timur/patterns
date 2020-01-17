<?php

namespace App\Interfaces;

/**
 * Interface EventChanelInterface
 * @package App\Interfaces
 */
interface EventChanelInterface
{
    /**
     * @param string $channel
     * @param $data
     *
     * @return mixed
     */
    public function publish($channel, $data);

    /**
     * @param string $channel
     * @param SubscriberInterface $subscriber
     *
     * @return mixed
     */
    public function subscribe($channel, SubscriberInterface $subscriber);
}