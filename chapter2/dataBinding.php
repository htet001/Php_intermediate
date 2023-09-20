<?php

// class One
// {
//     public function className()
//     {
//         return __CLASS__;
//     }
//     public function getClassName()
//     {
//         echo static::className();
//     }
// }
// class Two extends One
// {
//     public function  className()
//     {
//         return __CLASS__;
//     }
// }
// $one = new One();
// $one->getClassName();
// echo "<hr>";
// $two = new Two();
// $two->getClassName();



class One
{
    public static $name = "Htet Shine Linn";
    public static function authorName()
    {
        return self::$name;
    }
    public static function getAuthorName()
    {
        echo static::authorName();
    }
}
class Two extends One
{
    public static function  authorName()
    {
        return static::$name . " Wint";
    }
}
One::getAuthorName();
// $one = new One();

echo "<hr>";
Two::getAuthorName();
// $two = new Two();