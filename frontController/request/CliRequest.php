<?php

namespace app\frontController\request;

class CliRequest extends \app\frontController\Request
{

    function init()
    {
        $args = $_SERVER['argv'];
        foreach ($args as $arg)
        {
            if(preg_match("/^path: (\S+)/", $arg, $matches))
            {
                $this->path = $matches[1];
            }
            else
            {
                if(strpos($arg, '='))
                {
                    list($key, $val) = explode("=", $arg);
                }
            }
        }
        $this->path = (empty($this->path)) ? "/" : $this->path;
    }
}