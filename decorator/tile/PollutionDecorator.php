<?php

namespace app\decorator\tile;

class PollutionDecorator extends TileDecorator
{

    function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() - 4;
    }
}