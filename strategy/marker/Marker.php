<?php

namespace app\strategy\marker;

abstract class Marker
{
    protected string $test;

    public function __construct(string $test)
    {
        $this->test = $test;
    }

    abstract public function mark(string $response) : bool;
}