<?php


trait Member
{
    var $name = "MgMg";
}
trait Hacker
{
    var $age = 30;
}
trait mma
{
    use Member, Hacker;
}
class PHP_15_trait
{
    use mma;
}

$obj = new PHP_15_trait();
echo $obj->name;