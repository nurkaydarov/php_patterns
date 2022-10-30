<?php

namespace app\observer\Login;

class SecurityMonitor extends LoginObserver
{


    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        if($status[0] == Login::LOGIN_WRONG_PASS){
            echo __CLASS__ . " : Отправка данных сис админу \n";
        }
    }
}