<?php

namespace app\AbstractFactory\product\Contact;

use app\AbstractFactory\Encoder;

abstract class ContactEncoder implements Encoder
{
    abstract public function encode() : string;
}