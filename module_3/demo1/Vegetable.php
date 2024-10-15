<?php

class Vegetable{

    private bool $edible;

    /**
     * @param bool $edible
     */
    public function __construct(bool $edible)
    {
        $this->edible = $edible;
    }

    public function isEdible(): bool
    {
        return $this->edible;
    }

    public function setEdible(bool $edible): void
    {
        $this->edible = $edible;
    }




}
