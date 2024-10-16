<?php

if (isset($_POST['submit'])) {
//TODO traitement

    $error = "C'est une error";

} ?>

<!doctype html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http - equiv="X-UA-Compatible" content="ie=edge">
    <title> Formulaire</title>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
</head>
<body>

<div class="container">
    <form action="" method="POST">
        <label for="firstname"> Prénom</label><input type="text" name="firstname" id="firstname">
        <label for="lastname"> Nom</label><input type="text" name="lastname" id="lastname">
        <label for="color"> Couleur préférée </label>

        <select name="color" id="color">
            <option value="red"> Rouge</option>
            <option value="green"> Vert</option>
            <option value="blue"> Bleu</option>
        </select>
        <input type="submit" value="Enregistrer" name="submit">
    </form>

</div>


</body>
</html>
