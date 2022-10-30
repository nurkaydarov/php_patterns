<?php

namespace app\frontController;

class Controller
{
    private Registry $registry;

    private function __construct()
    {
        $this->registry = Registry::getInstance();
    }

    public static function run()
    {
        $instance = new Controller();
        $instance->init();
        $instance->handleRequest();
    }

    private function init()
    {
        $this->registry->getApplicationHelper()->init();
    }

    private function handleRequest()
    {
        $request = $this->registry->getRequest();
    }
}