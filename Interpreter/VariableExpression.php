<?php

namespace app\Interpreter;

class VariableExpression extends Expression
{
    private string $name;
    private $value;


    public function __construct(string $name, string $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function interpret(InterpreterContext $interpreterContext)
    {
        if(!is_null($this->value)){
            $interpreterContext->replace($this, $this->value);
            $this->value = null;
        }
    }

    public function setValue(string $value){
        $this->value = $value;
    }
    public function getKey(){
        $this->name;
    }
}