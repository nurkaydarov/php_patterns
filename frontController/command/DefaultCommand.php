<?php

namespace app\frontController\command;

use app\frontController\Request;

class DefaultCommand extends Command
{

    public function doExecute(Request $request)
    {
        $request->addFeedback("Nurkaydarov AKtan");
        include_once(__DIR__ . '/main.php');
    }
}