<?php

namespace app\decorator\request;

class StructureProcess extends DecorateProcess
{

    public function process(RequestHelper $requestHelper)
    {
        echo __CLASS__ . ": формирования данных запроса" . PHP_EOL;
        $this->processRequest->process($requestHelper);
    }
}