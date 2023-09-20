<?php

$ary = ["Myanma" => 1, "Thailand" => 2, "India" => 3, "England" => 4];
var_dump($ary);
echo "<hr>" . $ary["Myanma"];
echo "<hr>";

$obj = (object)$ary;

var_dump($obj);

echo "<hr>" . $obj->Thailand;
