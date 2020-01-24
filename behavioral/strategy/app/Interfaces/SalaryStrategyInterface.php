<?php


namespace App\Interfaces;


interface SalaryStrategyInterface
{
    /**
     * @param array $period
     * @param array $user
     *
     * @return int
     */
    public function calc($period, $user): int;

    /**
     * @return string
     */
    public function getName(): string;
}