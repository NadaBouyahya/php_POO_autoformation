<?php 
class Fruit {
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct()
    {
        echo "<h1>
                this an {$this->name} and its color is {$this->color}
            <h1>";
    }

}

$apple = new Fruit("Apple", "Red");

?>