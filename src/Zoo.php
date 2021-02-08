<?php


namespace App;


use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zoo
{

    private static ?Enclosure $aquarium = null;
    private static ?Enclosure $aviary = null;
    private static ?Enclosure $fence = null;

    public static function addAnimal(Animal $animal): void
    {
        if ($animal instanceof CanSwim) {
            if (is_null(self::$aquarium)) {
                self::$aquarium = new Enclosure();
            }
            self::$aquarium->addAnimal($animal);
        }
        if ($animal instanceof CanFly) {
            if (is_null(self::$aviary)) {
                self::$aviary = new Enclosure();
            }
            self::$aviary->addAnimal($animal);
        }
        if ($animal instanceof CanWalk) {
            if (is_null(self::$fence)) {
                self::$fence = new Enclosure();
            }
            self::$fence->addAnimal($animal);
        }
    }

    /**
     * @return Enclosure
     */
    private static function getAquarium(): Enclosure
    {
        return self::$aquarium;
    }

    private static function getAviary(): Enclosure
    {
        return self::$aviary;
    }

    private static function getFence(): Enclosure
    {
        return self::$fence;
    }

    /**
     *
     */
    public static function visitTheZoo():void
    {
        self::getAquarium()->toString();
        self::getAviary()->toString();
        self::getFence()->toString();
    }

}

