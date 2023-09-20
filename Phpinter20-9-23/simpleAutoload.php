<?php
require_once "autoload/loder.php";
class simpleAutoload
{
    public function __construct()
    {
        loader::load('helper');
        $helper = new helper("Htet Shine Linn<hr>");
        $helper->yourname();

        loader::load('hello/hello');
        $hello = new hello();
        $hello->greet();
    }
}
$ans = new simpleAutoload();