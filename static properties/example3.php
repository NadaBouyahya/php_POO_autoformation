<?php

use Alphabets as GlobalAlphabets;

 class Alphabets {
    public static $secondAlphabet = "B";
 }

 class B extends Alphabets{
    public function B_alphabet(){
        return parent::$secondAlphabet;
    }
 }

 // Get value of static property directly via child class
 echo "<h1>" .B::$secondAlphabet. "</h1>";

 // Get value of static property via B_alphabet() method
 $b = new B();
 echo $b->B_alphabet();

?>