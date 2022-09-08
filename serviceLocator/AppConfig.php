<?php

namespace app\serviceLocator;

use app\AbstractFactory\BloggsCommsManager;
use app\AbstractFactory\CommsManager;
use app\AbstractFactory\MegaCommsManager;

class AppConfig
{
    private static AppConfig $instance;
    private CommsManager $commsManager;

    private function __construct()
    {
        $this->init();
    }

    private function init()
    {
        switch (Settings::$COMMSTYPE){
            case 'Mega':
                $this->commsManager = new MegaCommsManager();
                break;
            case 'Bloggs':
                $this->commsManager = new BloggsCommsManager();
                break;
            default:
                $this->commsManager = new BloggsCommsManager();

        }
    }

    public static function getInstance(){
        if(empty(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;

    }
    public function getCommsManager():CommsManager
    {
        return $this->commsManager;
    }

}