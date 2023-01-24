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

    protected function intro()
    {
        echo "the fruit is {$this->name} and the color is {$this->color} ";
    }
}


//child class
class Strawberry extends Fruit
{
    public function message()
    {
        echo "I Am a fruit or a berry ? ";

        // Call protected method from within derived class - OK
        $this->intro();
    }
}

$strawberry = new Strawberry('Strawberry', 'red');
$strawberry->message();
// $strawberry->intro();
