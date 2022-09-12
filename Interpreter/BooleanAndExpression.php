<?php

namespace app\Interpreter;

class BooleanAndExpression extends OperatorExpression
{

    protected function doInterpret(InterpreterContext $interpreterContext, $result_l, $result_r)
    {
        $interpreterContext->replace($this, $result_l && $result_r);
    }
}