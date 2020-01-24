<?php


namespace App;

use App\Classes\User;

class LazyInitialization
{
    private $user = null;

    public function  getUser()
    {
        if(is_null($this->user)) {
            $this->user = new User();
        }

        return $this->user;
    }

    public function  getSomething()
    {
        //
    }

    public function  getSomthingElse()
    {
        //
    }
}