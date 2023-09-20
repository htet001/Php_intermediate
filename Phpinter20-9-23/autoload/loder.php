<?php

class loader
{
    public static function load($classname)
    {
        require_once $classname . ".php";
    }
}