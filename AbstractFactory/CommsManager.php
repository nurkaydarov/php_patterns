<?php

namespace app\AbstractFactory;


use app\AbstractFactory\product\Appt\ApptEncoder;
use app\AbstractFactory\product\Contact\ContactEncoder;
use app\AbstractFactory\product\Ttd\TtdEncoder;

abstract class CommsManager
{
    const APPT = 1;
    const TTD = 2;
    const CONTACT = 3;


    abstract public function  getHeaderText() : string;
    abstract public function  getFooterEncoder(): string;
    //abstract public function make(int $flag_int): Encoder;
    abstract public function  getApptEncoder(): ApptEncoder;
    abstract public function  getTtdEncoder(): TtdEncoder;
    abstract public function  getContactEncoder(): ContactEncoder;



}