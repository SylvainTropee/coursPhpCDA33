<?php

//pour réupérer les paramètres dans l'url donc en GET
//var_dump($_GET);
//pour toutes les autres méthodes file_get_contents
$body = file_get_contents('php://input');

//var_dump(json_decode($body, true));

echo json_encode(['name' => 'Michel']);