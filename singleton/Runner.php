<?php

namespace app\singleton;

class Runner
{

    public static function run()
    {
        $instance = Singleton::getInstance();
        $instance->setAge(97);
        echo $instance->getAge() . " <br>";
        unset($instance);
        echo '<br>';
        $instance2 = Singleton::getInstance();
        echo "Instance2 " .  $instance2->getAge() . " <br>";

    }

}