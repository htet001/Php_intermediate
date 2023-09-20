<?php
$num = 30;
$var = function ($num, $string) {
    //global $num;
    $num = 50;
    echo "Ano is {$num}{$string}";
};
//$var(145);
//$var($num);

echo $num . "<hr>";
$var($num, "hello");
echo "<hr>" . $num;