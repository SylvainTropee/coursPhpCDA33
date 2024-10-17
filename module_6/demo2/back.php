<?php

$data = file_get_contents('php://input');

var_dump(json_decode($data));

echo json_encode(['name' => 'Michel']);