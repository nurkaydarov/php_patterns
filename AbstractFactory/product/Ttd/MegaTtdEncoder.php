<?php

namespace app\AbstractFactory\product\Ttd;

class MegaTtdEncoder extends TtdEncoder
{

    public function encode(): string
    {
        return "Данные о задачах закодированы в формате MegaCal <br> ";
    }
}