<?php

namespace app\frontController;

class Conf
{
    private array $vals = [];

    public function __construct(array $vals = [])
    {
        $this->vals = $vals;
    }

    public function get($key)
    {
        if(isset($this->vals[$key]))
        {
            return $this->vals[$key];
        }
        return null;
    }

    public function set($key, $value)
    {
        $this->vals[$key] = $value;
    }
}