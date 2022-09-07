<?php

namespace app\AbstractFactory\product\Contact;

class MegaContactEncoder extends ContactEncoder
{

    public function encode(): string
    {
        return "Данные о контактах закодированы в формате MegaCal <br> ";
    }
}