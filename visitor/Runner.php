<?php

namespace app\visitor;

class Runner
{
    public static function main(){
        $main_army = new Army();
        $main_army->addUnit(new Archer());
        $main_army->addUnit(new LaserCannon());
        //$main_army->addUnit(new TroopCarrier());

        $textDump = new TextDumpArmyVisitor();

        $main_army->accept($textDump);
        echo $textDump->getText();

    }
}