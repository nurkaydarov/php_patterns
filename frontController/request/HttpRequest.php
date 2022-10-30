<?php

namespace app\frontController\request;

class HttpRequest extends \app\frontController\Request
{

    public function init()
    {
        $this->properties = $_REQUEST;
        $this->path = $_SERVER['PATH_INFO'];
        $this->path = (empty($this->path)) ? "/" : $this->path;
    }
}