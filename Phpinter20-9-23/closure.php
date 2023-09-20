<?php
$num = 20;
$var = function () use ($num) {
    echo "I am closure {$num}";
};
$var();