<?php


namespace App\Interfaces;


interface MessengerSimpleFactoryInterface
{
    public function build (string $type);
}