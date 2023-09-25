<?php

class MyCustomException extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
        $handler = fopen("log.txt", "a");
        $data = "\n\nError Message => \n" . $message . "\nError Number => \n"
            . $code . "\nError Time\n " . date("Y-m-d H:i:s", time());
        fwrite($handler, $data);
        fclose($handler);
    }
}

function rFile($file)
{
    if (!file_exists($file)) {
        throw new MyCustomException("File does not Exist", 1002);
    }
}
try {
    rFile("HH.php");
} catch (Exception $e) {
    echo $e->getMessage();
}