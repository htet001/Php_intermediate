<?php
class PHP_7_This_Variable
{
    public $name = "HSL";

    public function changeName()
    {
        $this->name = "LINN"; //this---> this is useful for this function 
    }
}
$obj = new PHP_7_This_Variable();
$obj->changeName();
echo $obj->name;
