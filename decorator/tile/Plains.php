<?php

namespace app\decorator\tile;

class Plains extends Tile
{
    private int $wealthFactor = 3;

    function getWealthFactor(): int
    {
        return $this->wealthFactor;
    }
}