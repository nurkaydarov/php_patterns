<?php

namespace app\decorator;

use app\decorator\request\AuthenticateRequest;
use app\decorator\request\LogRequest;
use app\decorator\request\MainProcess;
use app\decorator\request\RequestHelper;
use app\decorator\request\StructureProcess;
use app\decorator\tile\DiamondDecorator;
use app\decorator\tile\Plains;
use app\decorator\tile\PollutionDecorator;

class Runner
{
    public static function main()
    {
        $tile = new Plains();
        echo $tile->getWealthFactor() . PHP_EOL;

        $tile1 = new DiamondDecorator(new Plains());
        echo $tile1->getWealthFactor() . PHP_EOL;

        $tile2 = new PollutionDecorator(new DiamondDecorator(new Plains()));
        echo $tile2->getWealthFactor() . PHP_EOL;

        $process = new AuthenticateRequest(new StructureProcess(new LogRequest( new MainProcess())));
        $process->process(new RequestHelper());
    }
}