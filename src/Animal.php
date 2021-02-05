<?php

namespace App;

Abstract class Animal{
    private $name;
    function __construct($name){
        $this->name = $name;
    }
    public function name()
    {
        return $this->name;
    }
    protected abstract function getNoise():string;
    public function noise(){
        return $this->getNoise();
    }
}