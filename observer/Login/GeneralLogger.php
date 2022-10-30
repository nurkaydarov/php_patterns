<?php

namespace app\observer\Login;

class GeneralLogger extends LoginObserver
{


    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        echo __CLASS__ . " : Регистрация в системном журнале \n";
    }
}