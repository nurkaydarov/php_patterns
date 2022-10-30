<?php

namespace app\Registry\example2;

class Registry
{
    private static ?Registry $instance = null;
    private array $values = [];

    private function __construct(){
    }

    public function getInstance() : self
    {
        if(is_null(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function get(string $key){

        if(isset($this->values[$key]))
        {
            return $this->values[$key];
        }
        return null;
    }

    public function set(string $key, $value)
    {
        $this->values[$key] = $value;
    }


}