<?php

namespace app\AbstractFactory;




use app\AbstractFactory\product\Appt\ApptEncoder;
use app\AbstractFactory\product\Appt\BloggsApptEncoder;
use app\AbstractFactory\product\Contact\BloggsContactEncoder;
use app\AbstractFactory\product\Contact\ContactEncoder;
use app\AbstractFactory\product\Ttd\BloggsTtdEncoder;
use app\AbstractFactory\product\Ttd\TtdEncoder;

class BloggsCommsManager extends CommsManager
{
    private Encoder $instance;
    public function getHeaderText(): string
    {
        return "BloggsCal верхний колонтитул";
    }

/*    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getTtdEncoder(): TtdEncoder
    {
        return new BloggsTtdEncoder();
    }

    public function getContactEncoder(): ContactEncoder
    {
        return new BloggsContactEncoder();
    }*/

    public function getFooterEncoder(): string
    {
        return "BloggsCal нижний колонтитул";
    }

    public function make(int $flag_int): Encoder
    {

        switch ($flag_int){
            case self::APPT:
                $this->instance = new BloggsApptEncoder();
                break;
            case self::TTD:
                $this->instance = new BloggsTtdEncoder();
                break;
            case self::CONTACT:
                $this->instance = new BloggsContactEncoder();
                break;

        }

        return $this->instance;
    }
}