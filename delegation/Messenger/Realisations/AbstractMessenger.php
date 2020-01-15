<?php

namespace Messenger\Realisations;

use Messenger\Interfaces\MessengerInterface;

/**
 * Class AbstractMessenger
 * @package Messenger\Realisations
 */
abstract class AbstractMessenger implements MessengerInterface
{
    /**
     * @var string
     */
    protected $sender;

    /**
     * @var string
     */
    protected $recipient;

    /**
     * @var string
     */
    protected $message;

    /**
     * @param string $value
     *
     * @return MessengerInterface
     */
    public function setSender($value): MessengerInterface
    {
        $this->sender = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return MessengerInterface
     */
    public function setRecipient($value): MessengerInterface
    {
        $this->recipient = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return mixed
     */
    public function setMessage($value): MessengerInterface
    {
        $this->message = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function send(): bool
    {
        return true;
    }
}