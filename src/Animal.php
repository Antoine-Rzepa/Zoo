<?php

namespace App;

abstract class Animal
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    protected abstract function getNoise(): string;

    public function noise(): string
    {
        return $this->getNoise();
    }
}