<?php

require_once 'connexion.php';

$user = null;

if (isset($_POST['submit'])) {

    $id = htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']);

    $sql = "SELECT * FROM proprietaires WHERE id_pers = :id AND nom = :name";

    $prep = $pdo->prepare($sql);
    $prep->execute(['id' => $id, 'name' => $name]);
    $user = $prep->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['submitUpdate'])) {

    var_dump($_REQUEST);

    $name = htmlspecialchars($_POST['name']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $id = htmlspecialchars($_REQUEST['id']);

    $sql = "UPDATE proprietaires 
    SET nom = :name, 
        prenom = :firstname, 
        adresse= :address, 
        ville = :city
        WHERE id_pers = :id";

    $prep = $pdo->prepare($sql);
    $prep->execute(
            ['name' => $name,
            'firstname' => $firstname,
            'address' => $address,
            'city' => $city,
                'id' => $id
            ]);



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
<form action="" method="POST">
    <label for="">Numéro</label>
    <input type="text" name="id">
    <label for="">Nom</label>
    <input type="text" name="name">
    <button type="submit" name="submit" value="submit">Connexion</button>
</form>
<?php
if ($user) { ?>
    <form action="q3.php?id=<?= $user['id_pers'] ?>" method="POST">
        <label for="">Nom</label>
        <input type="text" name="name" value="<?= $user['nom'] ?>">
        <br>
        <label for="">Prénom</label>
        <input type="text" name="firstname" value="<?= $user['prenom'] ?>">
        <br>
        <label for="">Adresse</label>
        <input type="text" name="address" value="<?= $user['adresse'] ?>">
        <br>
        <label for="">Ville</label>
        <input type="text" name="city" value="<?= $user['ville'] ?>">
        <br>
<!--        <input type="hidden" value="--><?php //= $user['id_pers'] ?><!--" name="id">-->
        <button type="submit" name="submitUpdate" value="submit">Enregistrer</button>
    </form>
    <?php
}
?>
</body>
</html>


