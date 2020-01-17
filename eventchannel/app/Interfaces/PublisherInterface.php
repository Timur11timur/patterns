<?php


namespace App\Interfaces;

/**
 * Interface PublisherInterface
 * @package App\Interfaces
 */
interface PublisherInterface
{
    /**
     * @param string $data
     *
     * @return mixed
     */
    public function publish($data);
}