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

    public function getHeaderText(): string
    {
        return "BloggsCal верхний колонтитул";
    }

    public function getApptEncoder(): ApptEncoder
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
    }

    public function getFooterEncoder(): string
    {
        return "BloggsCal нижний колонтитул";
    }
}