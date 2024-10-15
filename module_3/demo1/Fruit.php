<?php

require_once 'Vegetable.php';

class Fruit extends Vegetable {

    private ?string $color = null;
    private float $price;
    private int $size;

    public function __construct(private string $name)
    {
        parent::__construct(true);
        $this->price = 0.0;
        $this->size = 0;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }



    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function __toString(): string
    {
        return "$this->name est $this->color, prix : $this->price, taille en cm : $this->size";
    }

}
