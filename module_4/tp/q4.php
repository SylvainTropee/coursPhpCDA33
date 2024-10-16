<?php

$ht = (isset($_REQUEST['ht']) ? $_REQUEST['ht'] : 0.0);
$tva = (isset($_REQUEST['tva']) ? $_REQUEST['tva'] : 0);

if (isset($_REQUEST['ht'])) {

    $amountTva = $ht * $tva / 100;
    $ttc = $ht + $amountTva;
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

<form>
    <label for="">Prix HT</label>
    <input type="number" name="ht" value="<?= $ht ?>"> €
    <br>
    <label for="">Taux TVA</label>
    <input type="number" step="0.01" name="tva" value="<?= $tva ?>"> %
    <br>
    <button type="submit">Calculer</button>

</form>

<?php
if (isset($amountTva)) { ?>
    <label for="">Montant de la TVA</label>
    <input type="number" value="<?= $amountTva ?>"> €
    <br>
    <label for="">Montant TTC</label>
    <input type="number" value="<?= $ttc ?>"> €

<?php } ?>


</body>
</html>