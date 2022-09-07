<?php

namespace app\AbstractFactory\product\Contact;

class BloggsContactEncoder extends ContactEncoder
{

    public function encode(): string
    {
        return "Данные о контактах закодированы в формате BloggsCal <br> ";
    }
}