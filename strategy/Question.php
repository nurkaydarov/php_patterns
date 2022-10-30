<?php

namespace app\strategy;

use app\strategy\marker\Marker;

abstract class Question
{
    protected $prompt;
    protected Marker $marker;

    public function __construct(string $prompt, Marker $marker)
    {
        $this->prompt = $prompt;
        $this->marker = $marker;
    }

    public function mark($response){
        $this->marker->mark($response);
    }
}