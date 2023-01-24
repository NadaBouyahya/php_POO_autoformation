<?php

// parent class
class Fruit 
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "the fruit is {$this->name} and the color is {$this->color}";
    }
}


//child class
class Strawberry extends Fruit{
    public function message(){
        echo "I Am a fruit or a berry ?";
    }
}

$strawberry = new Strawberry('Strawberry', 'red');
$strawberry->message();
echo '<br>';
$strawberry->intro();

?>