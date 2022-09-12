<?php

namespace app\Interpreter;

class InterpreterContext
{
    private array $expressionstore = [];

    public function replace(Expression $expression, string $value)
    {
        $this->expressionstore[$expression->getKey()] = $value;
    }
    public function lookup(Expression $expression){
        return $this->expressionstore[$expression->getKey()];
    }
}