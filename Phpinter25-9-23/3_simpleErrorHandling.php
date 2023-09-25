<?php

class MyError extends Exception
{
}

function myErrorHandler($erCode, $erMessage, $file, $lineNum)
{
    echo "Error code is " . $erCode . "<br>";
    echo "Error Message is " . $erMessage . "<br>";
    echo "Error file is " . $file . "<br>";
    echo "Error lineNum is " . $lineNum . "<br>";

    throw new MyError($erMessage, $erCode);
}

set_error_handler("myErrorHandler");

try {
    include "Hello.php";
} catch (Exception $e) {
    echo $e->getMessage();
}