<?php


namespace App\Classes;


class Order
{
    /**
     * @var int
     */
     public $id;

    /**
     * @var string
     */
    public $deleveryDate;

    /**
     * @var Client
     */
    public $client;

    /**
     * Order constructor.
     * @param int $id
     * @param string $deleveryDate
     * @param Client $client
     */
     public function __construct($id, $deleveryDate, Client $client)
     {
         $this->id = $id;
         $this->deleveryDate = $deleveryDate;
         $this->client = $client;
     }

     public function __clone()
     {
         $this->id .= '_copy';
         $this->deleveryDate = time() + 111;
         $this->client->addOrder($this);
     }
}