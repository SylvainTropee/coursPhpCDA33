<?php

//function sayHello(string$name) : string{
//    return "Hello $name";
//}
//
//print(sayHello("michel"));


function add(int &$number = 10) : int{
    $number++;
    return $number * 2;
}

$test = 12;
var_dump(add($test));
var_dump($test);


print(add());












