<?php

namespace app\visitor;

abstract class Unit
{
    protected  $depth = 0;

    public function accept(ArmyVisitor $armyVisitor)
    {
        $refthis = new \ReflectionClass(get_class($this));
        $method = "visit" . $refthis->getShortName();
        $armyVisitor->$method($this);
    }
    protected function setDepth($depth)
    {
        $this->depth = $depth;
    }
    public function getDepth(){
        return $this->depth;
    }

    public function getComposite(){
        return null;
    }
    abstract public function bombardStrength() : int;
}