<?php

class CyberGang {
    protected static function tutor(){
        return "<h1> Abdelatif Soklabi is an elegant tutor </h2>";
    }
}

class Tutor extends CyberGang {
    public $tutorFeature;
     public function __construct()
     {
        $this->tutorFeature = parent::tutor();
     }
}

$Tutor = new Tutor;
echo $Tutor->tutorFeature;
