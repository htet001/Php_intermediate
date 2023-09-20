<?php

//abstract method never have body
//abstract class must be contain abstract
//must override if abstract method


// abstract class mama
// {
//     public $shename = "Mother";
// }

// abstract class papa extends mama
// {
//     public const DB_HOST = "localhost";
//     public $name = "mgmg";

//     public abstract function doit();
//     public function Mycon()
//     {
//         echo "I am con<hr>";
//     }
// }
// class hey extends papa
// {
//     public function doit()
//     {
//         echo "i am doind it";
//     }
// }
// $in = new hey();
// // $in->Mycon();
// // $in->doit();
// echo $in->shename;



//Interface

// interface test
// {
//     const DB_user = "root";
//     public function myff();
// }

// interface aa
// {
//     const helo = "morning";
//     public function mygg();
// }
// class bb implements test, aa
// {
//     public function myff()
//     {
//     }
//     public function mygg()
//     {
//     }
// }


//super class
interface tinter
{
    public function mustOver();
}
class DD
{
    public function nameDD()
    {
        echo "My name is DD";
    }
}
class One extends DD implements tinter
{
    public function className()
    {
        return __CLASS__;
    }
    public function getClassName()
    {
        echo static::className();
    }
    public function mustOver()
    {
        echo "i am t inter";
    }
}
class Two extends One
{
    public function  className()
    {
        return __CLASS__;
    }
}
$one = new Two();
$one->mustOver();
