<?php

namespace App;

/**
 * Class SomeBigClass
 * @package App
 */
class SomeBigClass
{

    /**
     *
     */
    public function run()
    {
        $one = new SmallOneClass();
        $two = new SmallTwoClass();
        $three = new SmallThreeClass();

        $one->someLogic();
        $two->someLogic();
        $three->someLogic();
    }
}