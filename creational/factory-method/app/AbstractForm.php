<?php


namespace App;


use App\Interfaces\FactoryInterface;
use App\Interfaces\FormInterface;

abstract class AbstractForm implements FormInterface
{
    /**
     * Выполнем что ненобходимо
     */
    public function render()
    {
        $factory = $this->createFactory();
        echo $factory->buildCheckbox()->draw();
        echo $factory->buildButton()->draw();

    }

    /**
     * Получаем инстументарий
     *
     * @return FactoryInterface
     */
    abstract function createFactory() :FactoryInterface;
}