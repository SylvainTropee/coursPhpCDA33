<?php

require_once 'GoodByeTrait.php';

trait HelloTrait
{
    use GoodByeTrait;

    public function sayHello(){
        echo '<h1>Hello !</h1>';
    }

}