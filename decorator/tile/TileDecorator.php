<?php

namespace app\decorator\tile;

abstract class TileDecorator extends Tile
{
    protected Tile $tile;

    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}