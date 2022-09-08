<?php

namespace app\Prototype;

use app\Prototype\product\EarthForest;
use app\Prototype\product\EarthPlains;
use app\Prototype\product\EarthSea;
use app\Prototype\product\Forest;
use app\Prototype\product\MarsForest;
use app\Prototype\product\MarsPlains;
use app\Prototype\product\MarsSea;

class Runner
{
    public static function main()
    {
        $factory = new TerrainFactory(new EarthSea(1),  new EarthForest(), new EarthPlains());
        echo "<pre>";
        var_dump($factory->getSea());
        var_dump($factory->getForest());
        var_dump($factory->getPlains());

        echo "</pre>";

        $factory1 = new TerrainFactory(new MarsSea(2),  new MarsForest(), new MarsPlains());
        echo "<pre>";
        var_dump($factory1->getSea());
        var_dump($factory1->getForest());
        var_dump($factory1->getPlains());

        echo "</pre>";
    }

}