<?php

namespace app\factoryMethod;

class BloggsApptEncoder extends ApptEncoder
{

    public function encode(): string
    {
        return "Данные о встрече закодированы в формате BloggsCal <br> ";
    }
}