<?php
class Fruit {
    //properties
    public $name;
    public $color;

    //methods
    function set_name($name){
        $this->name = $name;
    }
    function set_color($color){
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

$apple = new Fruit();
$apple -> set_name('Apple');
$apple -> set_color('Green');

echo ('<h1>
        this ' . $apple->get_name() . ' is ' . $apple->get_color() . 
    '</h1>');

    
?>
