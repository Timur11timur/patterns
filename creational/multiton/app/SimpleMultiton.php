<?php


namespace App;


use App\Interfaces\MultitonInterface;
use App\Traits\MutlitonTrait;

class SimpleMultiton implements MultitonInterface
{
    use MutlitonTrait;

    /**
     * @var string
     */
    private $test;

    /**
     * @param $value
     *
     * @return $this
     */
    public function setTest($value)
    {
        $this->test = $value;

        return $this;
    }
}