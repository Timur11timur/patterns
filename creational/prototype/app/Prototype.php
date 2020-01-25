<?php


namespace App;


use App\Classes\Client;
use App\Classes\Order;


class Prototype
{
    public function run()
    {
        $client = new Client (2, 'Vasya');

        $order = new Order (11, time(), $client);

        $client->addOrder($order);

        $clonedOrder = clone $order;

        echo "<pre>";
        print_r($order);
        echo "</pre>";
        echo "<hr />";
        echo "<pre>";
        print_r($clonedOrder);
        echo "</pre>";
    }
}