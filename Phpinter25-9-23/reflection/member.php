<?php

namespace App;

class member
{
    private $isAuth = false;
    private $detailInfo = [
        "name" => "Mg Mg",
        "age" => 20,
        "school" => "Rangoon"
    ];
    public function __construct()
    {
    }
    public function getDetailInfo($data = "")
    {
        return $this->detailInfo;
        //echo "I am being Invole<br>" . $arg[0] . "<br>";
    }
    public function setAuth($bol)
    {
        $this->isAuth = $bol;
    }
    public function getAuth()
    {
        return $this->isAuth;
    }
}