<?php
require_once './vendor/autoload.php';
use app\singleton\Runner;

//Runner::run();
//\app\factoryMethod\Runner::run();
//\app\AbstractFactory\Runner::run();
//\app\Prototype\Runner::main();

//\app\serviceLocator\Runner::main();

\app\dependencyInjection\Runner::main();