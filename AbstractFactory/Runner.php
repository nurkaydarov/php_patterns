<?php

namespace app\AbstractFactory;

class Runner
{
    public static function run()
    {
        $bloogsManager = new BloggsCommsManager();
        $megaManager = new MegaCommsManager();
        echo $bloogsManager->make(1)->encode();
        echo $bloogsManager->make(2)->encode();
        echo $bloogsManager->make(3)->encode();
        echo $bloogsManager->make(4)->encode();
/*        echo $bloogsManager->getApptEncoder()->encode();
        echo $bloogsManager->getTtdEncoder()->encode();
        echo $bloogsManager->getContactEncoder()->encode();
        echo "<br>";
        echo $megaManager->getApptEncoder()->encode();
        echo $megaManager->getTtdEncoder()->encode();
        echo $megaManager->getContactEncoder()->encode();*/

    }

}