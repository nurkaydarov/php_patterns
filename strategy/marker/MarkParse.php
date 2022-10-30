<?php

namespace app\strategy\marker;

class MarkParse
{
    private $expression;
    private $operand;
    private $interpreter;
    private $context;

    public function __construct($statement)
    {
        $this->compile($statement);
    }

    public function compile($statement)
    {
        // Построить дерево синтаксического анализа

    }
    public function evualate($response){}

}