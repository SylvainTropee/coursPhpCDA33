<?php

class Article
{

    private int $id;

    private float $price;

    private string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public static function hydrate(array $data){

        $article = new Article();
        $article->setId($data['id']);
        $article->setPrice($data['price']);
        $article->setName($data['name']);

        return $article;
    }








}