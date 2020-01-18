<?php


namespace App;


use App\Factories\SemanticFactory;
use App\Interfaces\FactoryInterface;

class SemanticForm extends AbstractForm
{
    /**
     * @return FactoryInterface
     */
    public function createFactory() :FactoryInterface
    {
        return new SemanticFactory();
    }
}