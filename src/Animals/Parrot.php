<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;

class Parrot extends Animal implements CanFly
{

    protected function getNoise(): string
    {
        return "coco";
        // TODO: Implement getNoise() method.
    }
}