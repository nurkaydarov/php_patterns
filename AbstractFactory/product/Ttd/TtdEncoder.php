<?php

namespace app\AbstractFactory\product\Ttd;

use app\AbstractFactory\Encoder;

abstract class TtdEncoder
{
    abstract public function encode() : string;
}