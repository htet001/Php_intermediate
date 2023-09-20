<?php

function done(...$var)
{
    echo $var[0] ?? "no index";
}
done();