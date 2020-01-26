<?php


namespace App;


use App\Classes\User;
use App\Classes\CreaditCard;
use App\Classes\Calculator;


class ObjectPoolDemo
{
    private $objectPool;

    public function __construct()
    {
        $this->objectPool = ObjectPool::getInstance();

        $user = new User();
        $creditCard = new CreaditCard();
        $calculator = new Calculator();

        $this->objectPool
            ->addObject($user)
            ->addObject($creditCard)
            ->addObject($calculator);
    }

    public function run()
    {
        $creaditCard1 = $this->objectPool->getObject(CreaditCard::class);
        $creaditCard1->test = "Some creadit card data";

        $creaditCard2 = $this->objectPool->getObject(CreaditCard::class);

        $user1 = $this->objectPool->getObject(User::class);

        $user2 = $this->objectPool->getObject('edfewgreverrgewrg');

        $calculator1 = $this->objectPool->getObject(Calculator::class);
        $calculator1->test = "Some calculator data";
        $this->objectPool->returnToPool($calculator1);

        $calculator2 = $this->objectPool->getObject(Calculator::class);

        var_dump($creaditCard1);
        echo "<hr />";
        var_dump($creaditCard2);
        echo "<hr />";
        var_dump($user1);
        echo "<hr />";
        var_dump($user2);
        echo "<hr />";
        var_dump($calculator1);
        echo "<hr />";
        var_dump($calculator2);

    }
}