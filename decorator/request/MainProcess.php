<?php

namespace app\decorator\request;

class MainProcess extends ProcessRequest
{

    public function process(RequestHelper $requestHelper)
    {
        echo __CLASS__ . " выполнения запроса" . PHP_EOL;
    }
}