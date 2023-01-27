<?php 
abstract class Car {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro() : string;
}

class Audi extends Car {
    public function intro(): string
    {
        return "<h1> this is german car : {$this->name} </h1>";
    }
}
class Volvo extends Car {
    public function intro(): string
    {
        return "<h1> this is Swedish car : {$this->name} <h1>";
    }
}

$audi = new Audi('audi');
echo $audi->intro();
echo "<br>";
$volvo = new Volvo('volvo');
echo $volvo->intro();


?>