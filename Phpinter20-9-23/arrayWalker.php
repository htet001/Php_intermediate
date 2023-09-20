<?php
$ary = ["1" => "one", "2" => "two", "3" => "three"];
$done = function ($val, $key) {
    echo "Key is " . $key . " value is " . $val . "<hr>";
};
array_walk($ary, $done);