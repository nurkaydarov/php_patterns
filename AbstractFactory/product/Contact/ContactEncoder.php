<?php

namespace app\AbstractFactory\product\Contact;

abstract class ContactEncoder
{
    abstract public function encode() : string;
}