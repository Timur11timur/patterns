<?php

namespace App\Factories;

use App\Classes\ButtonSemantic;
use App\Classes\CheckboxSemantic;
use App\Interfaces\ButtonInterface;
use App\Interfaces\CheckboxInterface;
use App\Interfaces\FactoryInterface;

class SemanticFactory implements FactoryInterface
{
    /**
     * @return ButtonInterface
     */
    public function buildButton(): ButtonInterface
    {
        return new ButtonSemantic();
    }

    /**
     * @return CheckboxInterface
     */
    public function buildCheckbox(): CheckboxInterface
    {
        return new CheckboxSemantic();
    }
}