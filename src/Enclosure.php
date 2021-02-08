<?php


namespace App;


class Enclosure
{
    public array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function toString(): void
    {
        foreach ($this->animals as $value) {
            echo "<pre>";
            echo " Je suis : " . $value->name() . " et je fais " . $value->noise();
            echo "</pre>";
        }
    }
}
