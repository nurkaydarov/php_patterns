<?php

namespace app\AbstractFactory;


use app\AbstractFactory\product\Appt\ApptEncoder;
use app\AbstractFactory\product\Contact\ContactEncoder;
use app\AbstractFactory\product\Ttd\TtdEncoder;

abstract class CommsManager
{
    abstract public function  getHeaderText() : string;
    abstract public function  getApptEncoder(): ApptEncoder;
    abstract public function  getTtdEncoder(): TtdEncoder;
    abstract public function  getContactEncoder(): ContactEncoder;
    abstract public function  getFooterEncoder(): string;


}