<?php

class PHP_10_constructor
{
    public function __construct($s1, $s2, $s3)
    {
        echo "Result==>" . ($s1 + $s2 -  $s3);
    }
}
//new PHP_10_constructor;
$obj = new PHP_10_constructor(10, 20, 5);
