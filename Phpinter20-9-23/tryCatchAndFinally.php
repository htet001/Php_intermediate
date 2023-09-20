<?php

function erroehanldler()
{
    throw new Exception("File Do Not Found");
}
set_error_handler("erroehanldler");
try {
    fopen('tet.txt', 'r');
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "<br>Hey hello";
}