<?php

namespace app\decorator\request;

abstract class DecorateProcess extends ProcessRequest
{
    protected ProcessRequest $processRequest;
    public function __construct(ProcessRequest $processRequest)
    {
        $this->processRequest = $processRequest;
    }
}