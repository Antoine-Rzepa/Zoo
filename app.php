<?php


use App\Animals\Bubblefish;
use App\Animals\Catfish;
use App\Animals\Clownfish;
use App\Animals\Dove;
use App\Animals\Elephant;
use App\Animals\Fish;
use App\Animals\Parrot;
use App\Animals\Zebra;

require __DIR__ . '/vendor/autoload.php';

// Here comes your code.



$animals = [
    Fish::class => 5,
    BubbleFish::class => 3,
    Catfish::class => 2,
    Clownfish::class => 1,
    Elephant::class => 2,
    Zebra::class => 1,
    Parrot::class => 10,
    Dove::class => 2,
];
$tableau = [];
foreach ($animals as $key => $value){
    for ($i = 1; $i < $value + 1; $i++){
        $tableau[] = new $key($key. " ". $i);
    }
}
foreach ($tableau as $value){
    echo "<pre>";
    echo " Je suis : " .$value->name(). " et je fais " .$value->noise();
    echo "</pre>";
}

echo "<pre>";
var_dump($tableau);
echo "</pre>";