<?php

//si le formulaire est soumis
if (isset($_POST['submit'])) {

    //nettoyage
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_SPECIAL_CHARS);
//    $firstname = $_POST['firstname'];
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $color = htmlspecialchars($_POST['color']);


    //validation des données
    $color = filter_var($color, FILTER_VALIDATE_REGEXP, ["options" => ['regexp' => '/(green|red|blue)/']]);

    //TODO enregister en base
    var_dump($color);

    echo $firstname;
    var_dump($firstname);
    echo $lastname;
    var_dump($lastname);


} else {

    echo "Vous n'avez pas accès à cette page !";
}
