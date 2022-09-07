<?php

namespace app\AbstractFactory;

use app\AbstractFactory\product\Appt\ApptEncoder;
use app\AbstractFactory\product\Appt\MegaApptEncoder;
use app\AbstractFactory\product\Contact\ContactEncoder;
use app\AbstractFactory\product\Contact\MegaContactEncoder;
use app\AbstractFactory\product\Ttd\MegaTtdEncoder;
use app\AbstractFactory\product\Ttd\TtdEncoder;

class MegaCommsManager extends CommsManager
{
    private Encoder $instance;
    public function getHeaderText(): string
    {
        return "BloggsCal верхний колонтитул";
    }

/*    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }

    public function getTtdEncoder(): TtdEncoder
    {
        return new MegaTtdEncoder();
    }

    public function getContactEncoder(): ContactEncoder
    {
        return new MegaContactEncoder();
    }*/


    public function make(int $flag_int): Encoder
    {

        switch ($flag_int){
            case self::APPT:
                $this->instance = new MegaApptEncoder();
                break;
            case self::TTD:
                $this->instance = new MegaTtdEncoder();
                break;
            case self::CONTACT:
                $this->instance = new MegaContactEncoder();
                break;

        }

        return $this->instance;
    }

    public function getFooterEncoder(): string
    {
        return "BloggsCal нижний колонтитул";
    }
}