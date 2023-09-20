<?php

function done(...$var)
{
    //var_dump($var[0]);
    echo $var[2][6];
}
done(["one", "two"], "hello", [1, 2, 3, 4, 5, 6, 7]);