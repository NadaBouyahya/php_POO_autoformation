<?php

use Fruit as GlobalFruit;

    class Fruit{
        public $name;
    }
    $apple = new Fruit();
    $apple->name = 'Apple';
    
    echo '<h1>' . $apple->name .'</h1>' ;
?>