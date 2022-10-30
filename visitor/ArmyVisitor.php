<?php

namespace app\visitor;

abstract class ArmyVisitor
{
    abstract public function visit(Unit $unit);

    public function visitArmy(Army $node){
        $this->visit($node);
    }
    public function visitArcher(Archer $node){
        $this->visit($node);
    }
    public function visitLaserCannon(LaserCannon $node){
        $this->visit($node);
    }
    public function visitTroopCarrier(TroopCarrier $node){
        $this->visit($node);
    }

}