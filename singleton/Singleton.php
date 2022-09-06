<?php

namespace app\singleton;

class Singleton
{
    private static $instance;
    public int $age;
    public static function getInstance()
    {
        if(empty(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getAge():int
    {
        return $this->age;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    private function __construct()
    {
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}