<?php


class Alphabets{
    public static $alphabet="first alphabet: A"; //static property
   
    public function FirstAlphabet(){
        return self::$alphabet;
    }
}

$alphabets = new Alphabets();
echo $alphabets->FirstAlphabet();

?>