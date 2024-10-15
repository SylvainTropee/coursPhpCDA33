<?php

require_once '../vendor/autoload.php';

use App\Entity;
//use App\Entity\User2;
use App\Entity\User;
use App\services\NotifService;

$user = new User("Sylvain");
//$user2 = new Entity\User2();
$service = new NotifService();

echo $user->getName();

