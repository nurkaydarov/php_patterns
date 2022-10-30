<?php

namespace app\visitor;

class TextDumpArmyVisitor extends ArmyVisitor
{
    private string $text = "";
    public function visit(Unit $node)
    {
        $text = "";
        $pad = 4 * $node->getDepth();
        $text .= sprintf("%{$pad}s", "");
        $text .= get_class($node) . ": ";
        $text .= "Огневая мощь: " . $node->bombardStrength() . PHP_EOL;
        $this->text .= $text;
    }
    public function getText(){
        return $this->text;
    }
}