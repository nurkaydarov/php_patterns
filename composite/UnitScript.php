<?php

namespace app\composite;

class UnitScript
{
    public static function joinExisting(Unit $newUnit, Unit $occupyingUnit): CompositeUnit
    {
        $composite = $occupyingUnit->getComposite();
        if(!is_null($composite)){
            $composite->addUnit($newUnit);
        }
        else{
            $composite = new Army();
            $composite->addUnit($occupyingUnit);
            $composite->addUnit($newUnit);
        }
        return $composite;
    }
}