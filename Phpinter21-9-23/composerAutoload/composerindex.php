<?php
require_once "vendor/autoload.php";
class Index
{
    public function __construct()
    {
        $start = new Start();
        $start->sayStartName();
        echo "<hr>";
        $start = new Home();
        $start->sayHomeName();
        echo "<hr>";
        $start = new Helper();
        $start->sayHelperName();
        echo "<hr>";
        $start = new Filter();
        $start->sayFilterName();
        echo "<hr>";
        $start = new End();
        $start->sayEndName();
        echo "<hr>";
        $start = new Best();
        $start->sayBestName();
    }
}
$ind = new Index();