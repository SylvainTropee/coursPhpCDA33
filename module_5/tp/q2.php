<?php

require_once 'connexion.php';

if (isset($_POST['submit'])) {

    $id = htmlspecialchars($_POST['id_modele']);
    $mark = htmlspecialchars($_POST['marque']);
    $model = htmlspecialchars($_POST['modele']);
    $fuel = htmlspecialchars($_POST['carburant']);


    $fuel = filter_var($fuel, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/(essence|diesel|gpl|electrique)/']]);

    if ($id && $mark && $model && $fuel) {

        $sql =
            'INSERT INTO modeles (id_modele, marque, modele, carburant) 
            VALUES (:id_modele, :marque, :modele, :carburant)';

        $prep = $pdo->prepare($sql);
        $prep->execute(
            ['id_modele' => $id, 'marque' => $mark,
                'modele' => $model, 'carburant' => $fuel]);

        if ($prep->rowCount() == 1) {
            header("location: q1.php");
        }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  method="POST">
    <label for="">identifiant</label>
    <input type="text" name="id_modele">
    <br>
    <label for="">marque</label>
    <input type="text" name="marque">
    <br>
    <label for="">modele</label>
    <input type="text" name="modele">
    <br>
    <input type="radio" name="carburant" value="essence">
    <label for="">Essence</label>
    <input type="radio" name="carburant" value="diesel">
    <label for="">Diesel</label>
    <input type="radio" name="carburant" value="gpl">
    <label for="">GPL</label>
    <input type="radio" name="carburant" value="electrique">
    <label for="">Electrique</label>
    <br>
    <button type="submit" name="submit" value="submit">Enregistrer</button>

</form>
</body>
</html>





