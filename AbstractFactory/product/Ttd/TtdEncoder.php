<?php

namespace app\AbstractFactory\product\Ttd;

abstract class TtdEncoder
{
    abstract public function encode() : string;
}