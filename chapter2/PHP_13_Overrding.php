<?php

class Member
{
    var $name = "HSL";
    public function done()
    {
        echo "you are very beautiful";
    }


    public function friendCount()
    {
        echo "hi";
    }
}
class PHP_13_Overriding extends Member
{
    public function friendCount()
    {
        echo "looking good"; //override
    }
}
$obj = new PHP_13_Overriding();
echo $obj->done();
echo "<br>";
echo $obj->friendCount();