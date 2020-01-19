<?php


namespace App\Interfaces;


interface MessengerStaticFactoryInterface
{
    public static function build (string $type);
}