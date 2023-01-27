<?php
trait Message1{
    public function msg1(){
        echo "Welcome to POO example.";
    }
}

trait Message2{
    public function msg3(){
        echo " thanks for visiting.";
    }
}

class Welcome{
    use Message1;
}

class Bye{
    use Message1, Message2;
}

$obj = new Welcome();
$obj->msg1();

echo "<br>";
$obj2 = new Bye();
$obj2->msg1();
$obj2->msg3();

?>