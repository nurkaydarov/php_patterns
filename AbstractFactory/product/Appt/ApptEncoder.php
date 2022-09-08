<?php

namespace app\AbstractFactory\product\Appt;

use app\AbstractFactory\Encoder;

abstract class ApptEncoder
{
    abstract public function encode() : string;
}