<?php

class sample
{
    private static $name = "htetshinelinn";
    private static $instance;

    private function __construct()
    {
        self::$name = "  Wint";
    }

    public static function getinstance() //static
    {
        if (self::$instance == null) {
            self::$instance = new sample();
        }
        return self::$instance;
    }
    public function getname()
    {
        return self::$name;
    }
}
$obj = sample::getinstance();
echo $obj->getname();
