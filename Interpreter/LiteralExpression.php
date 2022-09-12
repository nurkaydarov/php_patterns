<?php

namespace app\Interpreter;

class LiteralExpression extends Expression
{
    private string $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function interpret(InterpreterContext $interpreterContext)
    {
        $interpreterContext->replace($this, $this->value);
    }
}