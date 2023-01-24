<?php

class Fruit {
    private $name;


    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

}

$mango = new Fruit();
$mango->setName('mango');
echo $mango->getName();
?>