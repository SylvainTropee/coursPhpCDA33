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

<?php var_dump($_SERVER)?>
<form action="">
    <input type="text">
    <input type="hidden" value="<?= $_SERVER['HTTP_SEC_CH_UA']?>">
    <input type="submit" value="Valider">
</form>

</body>
</html>
