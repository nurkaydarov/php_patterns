<?php

namespace app\AbstractFactory\product\Appt;

abstract class ApptEncoder
{
    abstract public function encode() : string;
}