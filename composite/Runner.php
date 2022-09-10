<?php

namespace app\composite;

class Runner
{
    public static function run()
    {
        $army01 = new Army();
        $army01->addUnit(new Archer());
        $army01->addUnit(new Archer());

        $army07 = new Army();
        $army07->addUnit(new Army());
        $army07->addUnit(new LaserCannon());
        $composite = UnitScript::joinExisting($army01, $army07);
        echo "<pre>";
        var_dump($composite);
        echo "</pre>";
    }
}