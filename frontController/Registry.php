<?php

namespace app\frontController;

class Registry
{
    private static ?Registry $instance = null;

    private function __construct(){}

    public function getInstance(){
        if(is_null(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

}