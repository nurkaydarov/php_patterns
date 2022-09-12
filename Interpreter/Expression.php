<?php

namespace app\Interpreter;

abstract class Expression
{
    private static int $keycount = 0;
    private int $key;

    abstract public function interpret(InterpreterContext $interpreterContext);

    public function getKey(){
        if(!isset($this->key)){
           $this->key = self::$keycount++;
        }
        return $this->key;
    }
}