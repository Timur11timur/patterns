<?php


namespace App\Classes;


class Client
{
    /**
     * @var int
     */
    private $id;


    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $orders;

    /**
     * Client constructor.
     * @param int $id
     * @param string $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @param Order $order
     */
    public function addOrder(Order $order)
    {
        $this->orders[$order->id] = $order;
    }
}