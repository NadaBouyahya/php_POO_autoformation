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
        return "this is german car : {$this->name}";
    }
}
class Volvo extends Car {
    public function intro(): string
    {
        return "this is Swedish car : {$this->name}";
    }
}

$audi = new Audi('audi');
echo $audi->intro();

$volvo = new Volvo('volvo');
echo $volvo->intro();


?>