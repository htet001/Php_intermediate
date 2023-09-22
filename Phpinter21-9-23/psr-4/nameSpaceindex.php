<?php
require_once "vendor/autoload.php";

use namespaceapp\Best1;
use namespaceapp\middle\Home1;
use namespaceapp\middle\ww;
use namespaceapp\basecom\basecon;


class Index
{
    public function __construct()
    {
        $start = new Home1();
        $start->sayHomeName();
        echo "<hr>";
        $start = new Best1();
        $start->sayBestName();
        echo "<hr>";
        $start = new basecon();
        $start->saybaseName();
        echo "<hr>";
        $start = new ww();
        $start->saywwName();
    }
}
$ind = new Index();
