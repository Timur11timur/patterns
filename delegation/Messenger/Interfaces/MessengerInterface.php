<?php

namespace Messenger\Interfaces;
/**
 * Interface MessengerInterface
 */
interface MessengerInterface
{
    /**
     * @param string $value
     *
     * @return mixed
     */
    public function setSender($value): MessengerInterface;

    /**
     * @param string $value
     *
     * @return mixed
     */
    public function setRecipient($value): MessengerInterface;

    /**
     * @param string $value
     *
     * @return mixed
     */
    public function setMessage($value): MessengerInterface;

    /**
     * @return bool
     */
    public function send(): bool;

}