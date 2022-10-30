<?php

namespace app\visitor;

class LaserCannon extends CompositeUnit
{

    public function addUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . "не относится к листьям");
    }

    public function removeUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . "не относится к листьям");
    }

    public function bombardStrength(): int
    {
        return 11;
    }
}