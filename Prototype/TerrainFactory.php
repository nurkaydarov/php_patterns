<?php

namespace app\Prototype;

use app\Prototype\product\Forest;
use app\Prototype\product\Plains;
use app\Prototype\product\Sea;

class TerrainFactory
{
    private Sea $sea;
    private Forest $forest;
    private Plains $plains;
    public function __construct(Sea $sea, Forest $forest, Plains $plains)
    {
            $this->sea = $sea;
            $this->forest = $forest;
            $this->plains = $plains;
    }
    /**
     * @return Sea
     */
    public function getSea(): Sea
    {
        return clone $this->sea;
    }

    /**
     * @return Forest
     */
    public function getForest(): Forest
    {
        return clone $this->forest;
    }

    /**
     * @return Plains
     */
    public function getPlains(): Plains
    {
        return clone $this->plains;
    }



}