<?php

namespace app\frontController;

class Registry
{
    private array $values = [];
    private static ?Registry $instance = null;
    private Request $request;
    private Conf $conf;
    private Conf $commands;
    private ApplicationHelper $applicationHelper;

    private function __construct(){}

    public static function getInstance(){
        if(is_null(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    public function getRequest():Request
    {
        if(is_null($this->request))
        {
            throw \Exception('Объект типа Request не найден');
        }
        return $this->request;
    }

    public function setConf(Conf $conf)
    {
        $this->conf = $conf;
    }

    public function getConf(): Conf
    {
        if(is_null($this->conf))
        {
            $this->conf = new Conf();
        }
        return $this->conf;
    }

    public function setCommands(Conf $commands)
    {
        $this->conf = $commands;
    }

    public function getCommands() : Conf
    {
        return $this->commands;
    }



}