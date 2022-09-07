<?php

namespace app\AbstractFactory\product\Appt;

use app\AbstractFactory\Encoder;

abstract class ApptEncoder implements Encoder
{
    abstract public function encode() : string;
}