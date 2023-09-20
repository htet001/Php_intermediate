<?php
class returnTpye
{
    public function showResult(int $num): string
    {
        return 10.3;
    }
}
$ans = new returnTpye();
$vv = $ans->showResult(10);
var_dump($vv);