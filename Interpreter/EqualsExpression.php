<?php

namespace app\Interpreter;

class EqualsExpression extends OperatorExpression
{

    protected function doInterpret(InterpreterContext $interpreterContext, $result_l, $result_r)
    {
        $interpreterContext->replace($this, $result_l == $result_r);
    }
}