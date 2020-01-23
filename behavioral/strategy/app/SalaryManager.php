<?php


namespace App;


use App\Interfaces\SalaryStrategyInterface;

class SalaryManager
{
    /**
     * @var SalaryStrategyInterface
     */
    private $salaryStrategy;

    /**
     * @var array
     */
    private $period;

    /**
     * @var array
     */
    private $users;

    /**
     * SalaryManager constructor.
     * @param array $period
     * @param array $users
     */
    public function __construct(array $period, array $users)
    {
        $this->period = $period;
        $this->users = $users;
    }

    public function handle()
    {
        $usersSalary = $this->calculateSalary();

        $this->saveSalary($usersSalary);

        return $usersSalary;
    }

    public function calculateSalary()
    {
        foreach ($this->users as $user) {
            $strategy = $this->getStrategyByUser($user);
            $salary = $this->setCalculateStrategy($strategy)
                ->calculateUserSalary($this->period, $user);


        }

        return $usersSalary;
    }

    private function saveSatary($usersSalary)
    {
        return true;
    }

    private function getStrategyByUser ($user): SalaryStrategyInterface
    {

    }

    private function calculateUserSalary($period, $user)
    {
        return $this->salaryStrategy->calc($period, $user);
    }
}