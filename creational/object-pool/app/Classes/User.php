<?php


namespace App\Classes;


use App\Interfaces\ObjectPoolInterface;

class User implements ObjectPoolInterface
{
    public $test;

    public function __clone()
    {
        $this->test = null;
    }
}