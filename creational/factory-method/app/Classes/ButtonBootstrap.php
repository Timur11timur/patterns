<?php


namespace App\Classes;


use App\Interfaces\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{
    public function draw()
    {
        echo "<button type=\"button\" class=\"btn btn-primary\">Primary</button>";
    }
}