<?php

namespace app\composite;

class Runner
{
    public static function run()
    {
        $archer1 = new Archer();
        $laser1 = new LaserCannon();

        $army = new Army();
        $army->addUnit($archer1);
        $army->addUnit($laser1);

        echo $army->bombardStrength();
    }
}