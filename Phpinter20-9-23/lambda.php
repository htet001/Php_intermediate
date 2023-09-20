<?php

function doit($p1, $p2, $p3)
{
    $sum = $p1 + $p2;
    $p3($sum);
}
$ss = function ($var) {
    echo "I am lambda {$var}";
};
doit(3, 2, $ss);