<?php
$password = 'htetsl26403';
//$hpassword = "$2y$10$KrvHFNumycZaWs0.MDQIie.Ob87ffYPCm5z3tpqrVgNLlpQORh6IK";

$hpass = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
//echo $hpass;
$con = password_verify($password, $hpass);
echo $con ? "True" : "False";
