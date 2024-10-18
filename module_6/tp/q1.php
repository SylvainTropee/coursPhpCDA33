<?php

if(isset($_COOKIE['color'])){

}

if(isset($_POST['submit'])){

    $color = $_POST['color'];

   setcookie('color', $color);
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
<body style="background-color: <?= $_COOKIE['color'] ?? '' ?>">
<form action="" method="POST">
    <select name="color" id="">
        <option value="blue">Bleu</option>
        <option value="green">Vert</option>
        <option value="red">Rouge</option>
    </select>
    <button type="submit" value="submit" name="submit">Valider</button>
</form>
</body>
</html>
