<?php

namespace app\frontController;

class ApplicationHelper
{
    private $config = __DIR__ . "/data/conf.ini";
    private Registry $registry;

    private function __construct()
    {
        $this->registry = Registry::getInstance();
    }

    public function init()
    {

    }

    private function setupOptions()
    {
        if(!file_exists($this->config))
        {
            throw new AppException('Файл конфигураций не найден');
        }
        $options = parse_ini_file($this->config, true);
        $conf = new Conf($options['config']);
        //$this->registry->setC
    }
}