<?php

// class modifier
// {
//     private static $count = 0;
//     public function getCount()
//     {
//         self::$count++;
//         echo self::$count . "<br>";
//     }
// }
// $obj = new modifier();
// $obj->getCount();
// $obj->getCount();
// $obj->getCount();

// echo "<hr>";

// $ob = new modifier();
// $ob->getCount();
// $ob->getCount();
// $ob->getCount();


class nonstatic
{
    public static $count = 0;
    public function showme()
    {
        echo self::doIt();
    }
    public static function doIt()
    {
        echo "HEYHEY";
    }
}
$ans = new nonstatic();
echo $ans->showme();
