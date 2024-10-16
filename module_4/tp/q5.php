<?php
    if(isset($_POST['action'])){

        //strip_tags retire les éléments HTML de l'input
        //à l'inverse du htmlspecialchars qui les encodent
        $direction = strip_tags($_POST['action']);
        var_dump($direction);

        match ($_POST['action']){
            'buy' => header("location: buy.php"),
            'sell' => header("location: sell.php"),
            'rent' => header("location: rent.php"),
            default => header("HTTP/1.0 404 Not Found")
        };

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
<form method="POST">
    <button type="submit" name="action" value="<h1>buy</h1>">Acheter</button>
    <button type="submit" name="action" value="sell">Vendre</button>
    <button type="submit" name="action" value="rent">Louer</button>
</form>
</body>
</html>