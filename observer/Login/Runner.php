<?php

namespace app\observer\Login;

class Runner
{
    public static function main(){
        $login = new Login();
        $sc = new SecurityMonitor($login);
        new GeneralLogger($login);
        new PartnershipTool($login);
        $login->attach($sc);
        for($i = 0; $i < 0; $i++){
            $login->handleLogin('nurkaydarov', 'Qwerty', '127.0.0.1');
            print '\n';
        }

    }
}