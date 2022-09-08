<?php

namespace app\AbstractFactory\product\Contact;

use app\AbstractFactory\Encoder;

abstract class ContactEncoder
{
    abstract public function encode() : string;
}