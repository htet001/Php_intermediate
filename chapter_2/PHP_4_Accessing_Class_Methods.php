<?php
class PHP_4_Accessing_Class_Methods
{
    var $name = "HSL";
    public function test($well)
    {
        echo "hello world", $well;
    }
}
$obj = new PHP_4_Accessing_Class_Methods;
$obj->test("Welcome");
echo "<br>";
echo $obj->name;
