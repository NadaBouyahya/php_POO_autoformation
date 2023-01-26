<?php
class Goodbye
{
    const LEAVING_MESSAGE = "bye bye";

    public function message()
    {
        echo self::LEAVING_MESSAGE;
    }
}

echo Goodbye::LEAVING_MESSAGE;
$goodbye = new Goodbye();
echo $goodbye->message();

