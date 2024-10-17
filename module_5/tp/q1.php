<?php

require_once 'connexion.php';

$sql = "SELECT * FROM modeles ORDER BY marque";

/**
 * @var PDO $pdo
 */
$models = $pdo->query($sql)->fetchAll();

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

<table>
    <thead>
    <tr>
        <th>Identifiant</th>
        <th>Marque</th>
        <th>Modèle</th>
        <th>Carburant</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($models as $model) { ?>
        <tr>
            <td><?= htmlspecialchars($model['id_modele']) ?></td>
            <td><?= htmlspecialchars($model['marque']) ?></td>
            <td><?= htmlspecialchars($model['modele']) ?></td>
            <td><?= htmlspecialchars($model['carburant']) ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>


</body>
</html>



