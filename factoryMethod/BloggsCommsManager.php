<?php

namespace app\factoryMethod;

class BloggsCommsManager extends ComssManager
{

    public function getHeaderText(): string
    {
       return "BloggsCal верхний колонтитул  <br>";
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText(): string
    {
        return "BloggsCal нижний колонтитул  <br>";
    }
}