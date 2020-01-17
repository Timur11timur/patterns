<?php


namespace App\Interfaces;

/**
 * Interface SubscriberInterface
 * @package App\Interfaces
 */
interface SubscriberInterface
{
    /**
     * @param $data
     *
     * @return mixed
     */
    public function notify($data);
}