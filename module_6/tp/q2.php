<?php

if(isset($_POST['submit'])){
    setcookie('login', $_POST['login']);
}


if(isset($_COOKIE['login'])){
    $login = $_COOKIE['login'];
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

<form action="" method="post">
    <input type="text" name="login" value="<?= $login ?? ''?>">
    <label for="">Login</label>
    <br>
    <button type="submit" value="submit" name="submit">Valider</button>
</form>

</body>
</html>