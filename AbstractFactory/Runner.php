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


    }

}