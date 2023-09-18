<?php

class Members
{
    var $name = "HSL";
    var $age = "20";
    var $subject = "html";

    public function friendCount()
    {
        echo "hi";
    }
}
class PHP_12_Member extends Members
{
}
$obj = new PHP_12_Member();
echo $obj->name;
echo $obj->friendCount();
