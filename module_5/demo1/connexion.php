<?php
try {
    //driver : server ; bdd
    $dsn = 'mysql:host=localhost;dbname=legumes';

    $pdo = new PDO($dsn, 'root', '');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Connexion réussie';

}catch (PDOException $e){
    echo "Erreur de connexion ". $e->getMessage();
}

