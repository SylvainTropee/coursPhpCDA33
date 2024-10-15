<?php

namespace App\Entity;

class CityWithConstructor
{
    private static $citiesName = [];

    public function __construct(private string $name,   private string $county)
    {
        self::$citiesName[] = $name;
    }

    public static function getLongestCityName() : string
    {
        $city = '';
        foreach (self::$citiesName as $cityName){
            if(mb_strlen($cityName) > mb_strlen($city)){
                $city = $cityName;
            }
        }
        return $city;

    }
    public function __toString(): string
    {
       return "$this->name est dans le département $this->county";
    }

}