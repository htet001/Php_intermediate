<?php

include_once "sheinter.php";
include_once "heinter.php";
class banana implements sheinter, heinter
{
    private $data;

    public function shegotoschool($data)
    {
        $this->data = $data;
    }
    public function hegotoschool($data)
    {
        $this->data = $data;
    }
    public function output()
    {
        echo "<pre>" . print_r($this->data, true) . "</pre>";
    }
    public function busy()
    {
        echo "This person is busy with  " . $this->data[count($this->data) - 1];
    }
}
$obj = new banana();
$sheary = ["book", "pen", "cosmetic", "dress"];
$obj->shegotoschool($sheary);
$obj->output();
$obj->busy();


$boy = new banana();
$heary = ["football", "sora", "watch", "phone"];
$boy->hegotoschool($heary);
$boy->output();
$boy->busy();
