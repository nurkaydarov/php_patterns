<?php

namespace app\frontController;

abstract class Request
{
    protected array $properties;
    protected array $feedback = [];
    protected string $path = '/';

    public function __construct()
    {
        $this->init();
    }
    abstract function init();

    public function setPath(string $path)
    {
        $this->path = $path;
    }
    public function getPath()
    {
        return $this->path;
    }

    public function getProperty(string $key)
    {
        if(isset($this->properties[$key]))
        {
            return $this->properties[$key];
        }
        return null;
    }

    public function setProperty(string $key, $value)
    {
        $this->properties[$key] = $value;
    }

    public function addFeedback(string $message)
    {
        array_push($this->feedback, $message);
    }

    public function getFeedback()
    {
        return $this->feedback;
    }

    public function getFeedbackString($separator = "\n"): string
    {
        return implode($separator, $this->feedback);
    }
    public function clearFeedback()
    {
        $this->feedback = [];
    }
}