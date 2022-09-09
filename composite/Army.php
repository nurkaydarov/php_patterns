<?php

namespace app\composite;

class Army extends Unit
{
    private array $units = [];
    public function addUnit(Unit $unit)
    {
        if(in_array($unit, $this->units,true)){
            return;
        }
        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
       $index = array_search($unit, $this->units, true);
       if(is_int($index)){
           array_splice($this->units, $index, 1, []);
       }
    }

    public function bombardStrength(): int
    {
        $ret = 0;
        foreach ($this->units as $unit){
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}