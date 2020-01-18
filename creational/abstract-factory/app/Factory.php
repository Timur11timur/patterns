<?php


namespace App;


use App\Factories\BootstrapFactory;
use App\Factories\SemanticFactory;
use App\Interfaces\FactoryInterface;

class Factory
{
    /**
     * @param string $type
     *
     * @return FactoryInterface
     */
    public function getFactory($type): FactoryInterface
    {
        switch($type) {
            case 'bootstrap':
                $factory = new BootstrapFactory();
                break;
            case 'semantic':
                $factory = new SemanticFactory();
                break;
            default:
                die("Unknown factory type");
        }

        return $factory;
    }
}