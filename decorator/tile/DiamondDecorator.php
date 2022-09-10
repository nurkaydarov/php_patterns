<?php

namespace app\decorator\tile;

class DiamondDecorator extends TileDecorator
{

    function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() + 3;
    }
}