<?php


namespace App\Classes;


use App\Interfaces\CheckboxInterface;

class CheckboxSemantic implements CheckboxInterface
{
    public function draw()
    {
        echo "<div class=\"ui form\">
                  <div class=\"inline field\">
                    <div class=\"ui checkbox\">
                      <input type=\"checkbox\" tabindex=\"0\" class=\"hidden\">
                      <label>Checkbox</label>
                    </div>
                  </div>  
               </div>";
    }
}