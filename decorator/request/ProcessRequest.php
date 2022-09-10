<?php

namespace app\decorator\request;

abstract class ProcessRequest
{
    abstract public function process(RequestHelper $requestHelper);
}