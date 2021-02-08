<?php


use App\Animals\Bubblefish;
use App\Animals\Catfish;
use App\Animals\Clownfish;
use App\Animals\Dove;
use App\Animals\Elephant;
use App\Animals\Fish;
use App\Animals\Parrot;
use App\Animals\Zebra;
use App\Zoo;

require __DIR__ . '/vendor/autoload.php';

// Here comes your code.

$animals = [
    Fish::class => ["Fish", 5],
    Bubblefish::class => ["Bubblefish", 3],
    Catfish::class => ["Catfish", 2],
    Clownfish::class => ["Clownfish", 1],
    Elephant::class => ["Elephant", 2],
    Zebra::class => ["Zebra", 1],
    Parrot::class => ["Parrot", 10],
    Dove::class => ["Dove", 2],
];

foreach ($animals as $animalsType => $animalDefinition) {
    for ($i = 1; $i < $animalDefinition[1] + 1; $i++) {
        Zoo::addAnimal(new $animalsType($animalDefinition[0] . " " . $i));
    }
}

Zoo::visitTheZoo();





