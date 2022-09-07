<?php

namespace app\factoryMethod;

class Runner
{
    public static function run()
    {
        $managerBloggs = new BloggsCommsManager();
        echo $managerBloggs->getHeaderText();
        echo $managerBloggs->getApptEncoder()->encode();
        echo $managerBloggs->getFooterText();

        $managerMega = new MegaCommsManager();
        echo $managerMega->getHeaderText();
        echo $managerMega->getApptEncoder()->encode();
        echo $managerMega->getFooterText();
    }
}