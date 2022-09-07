<?php

namespace app\factoryMethod;

class MegaCommsManager extends ComssManager
{

    public function getHeaderText(): string
    {
        return "Header MegaCal  <br>";
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }

    public function getFooterText(): string
    {
        return "Footer MegaCall  <br>";
    }
}