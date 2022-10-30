<?php

namespace app\frontController\command;

use app\frontController\Registry;
use app\frontController\Request;

class CommandResolver
{
    private static $refcmd = null;
    private static $defaultcmd = DefaultCommand::class;

    public function __construct()
    {
        self::$refcmd = new \ReflectionClass(Command::class);

    }

    public function getCommand(Request $request)
    {
        $registry = Registry::getInstance();
        $commands = $registry->getCommands();
        $path = $request->getPath();

        $class = $commands->get($path);

        if(is_null($class))
        {
            $request->addFeedback("Соотвествие пути $path не обноружено");
            return new self::$defaultcmd();
        }

        if(!class_exists($class))
        {
            $request->addFeedback("Class $class not found");
        }

        $reflection_class = new \ReflectionClass($class);
        if(!$reflection_class->isSubclassOf(self::$refcmd))
        {
            $request->addFeedback("Command $reflection_class не относится к классу Command");
            return new self::$defaultcmd();
        }
        return $reflection_class->newInstance();


    }
}