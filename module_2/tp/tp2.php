<?php

//EX1
//function guessNumber(int $number) : int|false{
//    if($number < 0 || $number > 1000){
//        print("Veuillez saisir un nombre ente 0 et 1000");
//        return false;
//    }
//
//    $counter = 0;
//    do{
//        $counter++;
//        $randomNumber = rand(0, 1000);
//
//    }while($randomNumber != $number);
//
//    return $counter;
//}
//
//print("Nombre de tentatives :" . guessNumber(10000));


function sortNumber(int &$a, int &$b){

    if($a < $b){
        $t = $a;
        $a = $b;
        $b = $t;
    }
}

$a = 12;
$b = 15;
sortNumber($a, $b);
print("$a > $b");












