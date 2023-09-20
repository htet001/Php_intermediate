<?php

// class magicMethod
// {
//     public function __get($var)
//     {
//         echo "Object oriented programming{$var}";
//     }
//     public function __set($var, $value)
//     {
//         echo "Replace {$var} with {$value}";
//     }



//     public function __isset($name)
//     {
//         echo "My name is <i><b>{$name}</b></i>";
//     }
//     public function __unset($name)
//     {
//         echo "My first name is <i><b>{$name}</b></i>";
//     }



//     public function __call($method, $value)
//     {
//         echo "You are trying to call method {$method} with values of ";
//         echo "<pre>" . print_r($value) . "</pre>";
//     }


//     public static function __callStatic($name, $value)
//     {
//         echo "My name is {$name} vey";
//         echo "<pre>" . print_r($value, true) . "</pre>";
//     }
// }
//magicMethod::hey("Htet");
// $obj = new magicMethod();
// $obj->name = "HSL";
// echo "<hr>";
// isset($obj->htet);
// echo "<hr>";
// unset($obj->htet);
// echo "<hr>";
// $obj->hey("htet", "shine");



// $ary = [
//     ["one", "two", "three", "four"],
//     ["one", "two", "three", "four"],
//     ["one", "two", "three", "four"],
//     ["one", "two", "three", "four"]
// ];

// $data = serialize($ary);
// $normal = unserialize($data);
// echo "<pre>" . print_r($normal) . "</pre>";


// class magicMethod
// {
//     public function __sleep()
//     {
//         echo "There are many people";
//         return [];
//     }
//     public function __wakeup()
//     {
//         echo "I am busy now";
//     }
// }
// $obj = new magicMethod();
// $aa = serialize($obj);
// $aa = unserialize($aa);



class magicMethod
{
    public $name = "mgmg";
    public function __toString()
    {
        return "There are many people";
    }

    public function __invoke()
    {
        echo "I am busy now";
    }
    public function __clone()
    {
        echo "I am clone";
    }
}
$obj = new magicMethod();
$aa = clone $obj;
// echo $aa->name;