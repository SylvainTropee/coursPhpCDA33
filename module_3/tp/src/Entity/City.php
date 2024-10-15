<?php

namespace App\Entity;

class City
{
    private string $name;
    private string $county;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setCounty(string $county): void
    {
        $this->county = $county;
    }

    public function __toString(): string
    {
       return "$this->name est dans le département $this->county";
    }

}