<?php

namespace App\Factories;

use App\Classes\ButtonBootstrap;
use App\Classes\CheckboxBootstrap;
use App\Interfaces\ButtonInterface;
use App\Interfaces\CheckboxInterface;
use App\Interfaces\FactoryInterface;

class BootstrapFactory implements FactoryInterface
{
    /**
     * @return ButtonInterface
     */
    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    /**
     * @return CheckboxInterface
     */
    public function buildCheckbox(): CheckboxInterface
    {
        return new CheckboxBootstrap();
    }
}