<?php

session_start();

$_SESSION['name'] = 'Sylvain';

$id = session_id();

var_dump($id);

