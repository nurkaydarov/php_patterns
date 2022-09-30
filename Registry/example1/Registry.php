<?php

namespace app\Registry\example1;

class Registry
{
    private static $instance = null;
    private Request $request;

    private function __construct(){}

    public function getInstance() :self
    {
        if(is_null(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getRequest(): Request
    {
        if(is_null($this->request))
        {
            $this->request = new Request();
        }
        return $this->request;
    }

    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

}