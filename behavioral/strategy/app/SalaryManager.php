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

    /**
     * @return array
     */
    public function handle()
    {
        $usersSalary = $this->calculateSalary();

        $this->saveSalary($usersSalary);

        return $usersSalary;
    }

    public function calculateSalary()
    {
        $usersSalary =[];
        foreach ($this->users as $user) {
            $strategy = $this->getStrategyByUser($user);
            $salary = $this->setCalculateStrategy($strategy)
                ->calculateUserSalary($this->period, $user);
            $strategyName = $strategy->getName();

            $usersSalary[] = [
              'userName' => $user['name'],
              'salary' => $salary,
              '$strategyName' => $strategyName
            ];
        }

        return $usersSalary;
    }

    private function saveSalary($usersSalary)
    {
        return true;
    }

    /**
     * @param $user
     * @return SalaryStrategyInterface
     * @throws \Exception
     */
    private function getStrategyByUser ($user): SalaryStrategyInterface
    {
        $strqategyClass = __NAMESPACE__ . '\\Strategies\\' . ucwords($user['position']) . "Strategy";

        if(!class_exists($strqategyClass)) {
            throw new \Exception("Класс " . $strqategyClass . " не существует");
        }

        return new $strqategyClass;
    }

    /**
     * @param array $period
     * @param array $user
     *
     * @return int
     */
    private function calculateUserSalary($period, $user)
    {
        return $this->salaryStrategy->calc($period, $user);
    }

    /**
     * @param SalaryStrategyInterface $strategy
     *
     * @return $this
     */
    private function setCalculateStrategy(SalaryStrategyInterface $strategy)
    {
        $this->salaryStrategy = $strategy;

        return $this;
    }
}