<?php


namespace App\Classes;


use App\Interfaces\ObjectPoolInterface;

class CreaditCard implements ObjectPoolInterface
{
    public $test;

    public function __clone()
    {
        $this->test = null;
    }
}