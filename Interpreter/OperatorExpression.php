<?php

namespace app\Interpreter;

abstract class OperatorExpression extends Expression
{
    protected Expression $l_op;
    protected Expression $r_op;

    public function __construct(Expression $l_op, Expression $r_op)
    {
        $this->l_op = $l_op;
        $this->r_op = $r_op;
    }

    public function interpret(InterpreterContext $interpreterContext)
    {
        $this->l_op->interpret($interpreterContext);
        $this->r_op->interpret($interpreterContext);

        $result_l = $interpreterContext->lookup($this->l_op);
        $result_r = $interpreterContext->lookup($this->r_op);

        $this->doInterpret($interpreterContext,$result_l, $result_r);
    }

    abstract protected function doInterpret(InterpreterContext $interpreterContext, $result_l, $result_r);
}