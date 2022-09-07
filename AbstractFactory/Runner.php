<?php

namespace app\AbstractFactory;

class Runner
{
    public static function run()
    {
        $bloogsManager = new BloggsCommsManager();
        $megaManager = new MegaCommsManager();

        echo $bloogsManager->getApptEncoder()->encode();
        echo $bloogsManager->getTtdEncoder()->encode();
        echo $bloogsManager->getContactEncoder()->encode();
        echo "<br>";
        echo $megaManager->getApptEncoder()->encode();
        echo $megaManager->getTtdEncoder()->encode();
        echo $megaManager->getContactEncoder()->encode();

    }

}