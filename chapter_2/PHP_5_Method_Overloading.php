<?php
class PHP_5_Method_Overloading
{
    function do($num = 20)
    {
        echo "My age is " . $num;
    }
}
$obj = new PHP_5_Method_Overloading();
$obj->do();
