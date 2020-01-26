<?php


namespace App\Classes;


use App\Interfaces\ObjectPoolInterface;

class Calculator implements ObjectPoolInterface
{
    public $test;

    public function __clone()
    {
        $this->test = null;
    }
}