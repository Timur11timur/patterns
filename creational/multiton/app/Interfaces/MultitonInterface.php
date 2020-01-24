<?php


namespace App\Interfaces;


interface MultitonInterface
{
    public static function getInstance(string $instanceName): self;
}