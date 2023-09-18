<?php
class PHP_11_Desturctor
{
    var $t = 0;
    public function __construct()
    {
        echo "Heyy";
    }
    public function looping()
    {
        for ($i = 0; $i < 1000; $i++) {
            $this->t += $i;
        }
    }
    public function __destruct()
    {
        echo "destruct" . $this->t;
    }
}
$obj = new PHP_11_Desturctor();
$obj->looping();
