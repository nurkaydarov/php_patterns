<?php
declare(strict_types = 1);

namespace app\dependencyInjection;
class Runner
{
    public static function main(){
        $assembler = new ObjectAssembler( __DIR__ .'/config.xml');
        $apptmaker = $assembler->getComponent("\\app\\dependencyInjection\\AppointmentMaker");
        $output = $apptmaker->makeAppointment();
        var_dump($output);


    }
}