<?php


namespace App\Strategies;


use App\Interfaces\SalaryStrategyInterface;

abstract class AbstractStrategy implements SalaryStrategyInterface
{
    public function calc($period, $user): int
    {
        return rand(500, 2000);
    }

    public function getName(): string
    {
        return substr(static::class, strrpos(static::class, "\\") + 1);
    }
}