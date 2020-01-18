<?php


namespace App;


use App\Factories\BootstrapFactory;
use App\Interfaces\FactoryInterface;

class BootstrapForm extends AbstractForm
{
    /**
     * @return FactoryInterface
     */
    public function createFactory() :FactoryInterface
    {
        return new BootstrapFactory();
    }
}