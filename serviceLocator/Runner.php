<?php

namespace app\serviceLocator;

class Runner
{
    public static function main(){
        $manager = AppConfig::getInstance()->getCommsManager();
        echo $manager->getApptEncoder()->encode();
    }
}