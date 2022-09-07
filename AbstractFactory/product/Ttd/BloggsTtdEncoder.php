<?php

namespace app\AbstractFactory\product\Ttd;

class BloggsTtdEncoder extends TtdEncoder
{

    public function encode(): string
    {
        return "Данные о задачах закодированы в формате BloggsCal <br> ";
    }
}