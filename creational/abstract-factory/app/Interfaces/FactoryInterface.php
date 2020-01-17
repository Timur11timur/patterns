<?php

namespace App\Interfaces;

interface FactoryInterface
{
    public function buildButton(): ButtonInterface;

    public function buildCheckbox(): CheckboxInterface;
}