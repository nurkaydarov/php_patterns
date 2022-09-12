<?php

namespace app\Interpreter;

class Runner
{
    public static function main(){
        $context = new InterpreterContext();


/*        $variable = new VariableExpression('input', 'async');
        $variable->interpret($context);

        $newVariable = new VariableExpression('input');
        $newVariable->interpret($context);


        $variable->setValue('await');
        $variable->interpret($context);
        print_r($context->lookup($variable));
        print_r($context->lookup($newVariable));*/

        $context = new InterpreterContext();
        $input = new VariableExpression('input');

        $statement = new BooleanOrExpression(
            new EqualsExpression($input, new LiteralExpression('четыре')),
            new EqualsExpression($input, new LiteralExpression('4'))
        );

        var_dump($statement);

        foreach (["четыре", "4","52"] as $value){
            $input->setValue($value);

            echo $value . PHP_EOL;

            $statement->interpret($context);
            if($context->lookup($statement)){
                echo "Success!" . PHP_EOL . PHP_EOL;
            }
            else{
                echo 'Fail' . PHP_EOL . PHP_EOL;
            }

        }

    }
}