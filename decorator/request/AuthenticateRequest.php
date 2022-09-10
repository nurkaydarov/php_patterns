<?php

namespace app\decorator\request;

class AuthenticateRequest extends DecorateProcess
{

    public function process(RequestHelper $requestHelper)
    {
        echo __CLASS__ . ": аутентификация запроса" . PHP_EOL;
        $this->processRequest->process($requestHelper);
    }
}