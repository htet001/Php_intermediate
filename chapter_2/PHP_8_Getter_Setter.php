<?php

class PHP_8_Getter_Setter
{
    private $name = "HSL";
    public function setter($data)
    {
        $this->name = $data;
    }

    public function getter()
    {
        return $this->name;
    }
}
$obj = new PHP_8_Getter_Setter();
$obj->setter("HTET");
echo $obj->getter();
