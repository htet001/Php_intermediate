<?php

function MyReadFile($file)
{
    if (file_exists($file)) {
        $hand = fopen($file, 'r');
        $size = filesize($file);
        $data = fread($hand, $size);

        echo $data;
    } else {
        throw new Exception("This file does not Exist!!");
    }
}
try {
    MyReadFile("Hello.txt");
} catch (Exception $e) {
    echo $e->getMessage() . "<hr>";
    echo $e->getCode() . "<hr>";
    echo $e->getFile() . "<hr>";
    echo $e->getTraceAsString() . "<hr>";
}