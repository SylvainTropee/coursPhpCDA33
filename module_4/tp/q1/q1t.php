<?php

if (isset($_POST['submit'])) { ?>



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
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Ville</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= htmlspecialchars($_POST['lastname']) ?></td>
            <td><?= htmlspecialchars($_POST['firstname']) ?></td>
            <td><?= htmlspecialchars($_POST['address']) ?></td>
            <td><?= htmlspecialchars($_POST['city']) ?></td>
        </tr>
        </tbody>
    </table>
    </body>
    </html>


<?php } else {
    //echo "Vous n'avez pas le droit d'être là !";
    header('location: q1.php');
} ?>
