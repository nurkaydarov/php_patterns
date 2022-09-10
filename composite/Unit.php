<?php

namespace app\composite;

abstract class Unit
{
    public function getComposite(){
        return null;
    }
    abstract public function bombardStrength() : int;
}