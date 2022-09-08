<?php

namespace app\AbstractFactory\product\Ttd;

use app\AbstractFactory\Encoder;

abstract class TtdEncoder implements Encoder
{
    abstract public function encode() : string;
}