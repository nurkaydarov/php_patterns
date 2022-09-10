<?php

namespace app\decorator\request;

class LogRequest extends DecorateProcess
{

    public function process(RequestHelper $requestHelper)
    {
        echo __CLASS__  . ": регистрация запроса" . PHP_EOL;
        $this->processRequest->process($requestHelper);
    }

}