<?php

namespace app\frontController\command;

use app\frontController\Request;

abstract class Command
{
    final public function __construct()
    {

    }

    public function execute(Request $request)
    {
        $this->doExecute($request);
    }

    abstract public function doExecute(Request $request);
}