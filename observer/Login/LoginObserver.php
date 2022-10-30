<?php

namespace app\observer\Login;

abstract class LoginObserver implements Observer
{
    private Login $login;

    public function __construct(Login $login)
    {
        $this->login = $login;
        $login->attach($this);
    }
    public function update(Observable $observable){
        if($observable === $this->login){
            $this->doUpdate($observable);
        }
    }

    abstract public function doUpdate(Login $login);
}