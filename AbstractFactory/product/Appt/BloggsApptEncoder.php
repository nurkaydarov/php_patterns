<?php

namespace app\AbstractFactory\product\Appt;

class BloggsApptEncoder extends ApptEncoder
{

    public function encode(): string
    {
        return "Данные о встрече закодированы в формате BloggsCal <br> ";
    }
}