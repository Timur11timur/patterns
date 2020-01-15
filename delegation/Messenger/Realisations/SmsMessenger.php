<?php


namespace Messenger\Realisations;

/**
 * Class SmsMessenger
 * @package Messenger\Realisations
 */
class SmsMessenger extends AbstractMessenger
{
    /**
     * @return bool
     */
    public function send(): bool
    {
        echo('Sent by ' . __METHOD__ . '<br />From: ' . $this->sender . '<br />To: ' . $this->recipient . '<br />Message: ' . $this->message . '<hr />');

        return parent::send();
    }
}