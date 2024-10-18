<?php


require_once 'connexion.php';

$model = $_GET['model'];

$sql = "SELECT modele FROM modeles WHERE modele LIKE '$model%'";

$results = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $model){
    echo "<option>" . $model['modele'] . "</option>";
}

