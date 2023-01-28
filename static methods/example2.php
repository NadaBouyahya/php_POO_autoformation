<?php


class greeting {
    public static function Welcome(){
        echo "hello world !";
    }

    public function __construct()
    {
        self::Welcome();
    }
}

new greeting();
