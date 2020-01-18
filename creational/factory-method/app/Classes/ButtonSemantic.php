<?php


namespace App\Classes;


use App\Interfaces\ButtonInterface;

class ButtonSemantic implements ButtonInterface
{
    public function draw()
    {
        echo "<button class=\"ui button\">Follow</button>";
    }
}