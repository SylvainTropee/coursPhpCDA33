<?php

require_once "connexion.php";
require_once "Article.php";

$sql = "SELECT * FROM articles";

/**
 * @var PDO $pdo
 */
$result = $pdo->query($sql)->fetchAll(PDO::FETCH_CLASS, Article::class);
var_dump($result);

$statement = $pdo->prepare($sql);
$statement->setFetchMode(PDO::FETCH_CLASS, Article::class);
$prep = $statement->execute();

$article = $statement->fetch();

var_dump($article);

$id = 2;
$sql = "SELECT * FROM articles WHERE id = :id";
/////requête préparée
$prep = $pdo->prepare($sql);
//à rajouter pour fetcher avec une class
//$prep->setFetchMode(PDO::FETCH_CLASS, Article::class);
//je bind les paramètres
$prep->bindValue(':id', $id);
//j'execute la requête
$prep->execute();
//je récupére les résultats
$result = $prep->fetch();

var_dump($result);

if($result){
    $article = Article::hydrate($result);
    var_dump($article);
}


//insert
$name = 'kiwis';
$price = 99.99;
$sql = "INSERT INTO articles (name, price) VALUES (:name, :price)";
$prep =  $pdo->prepare($sql);
//$prep->bindValue('name', $name);
//$prep->bindValue('price', $price);
//$prep->execute()
//pour passer les paramètres directement
$prep->execute(['name' => $name, 'price' => $price]);














