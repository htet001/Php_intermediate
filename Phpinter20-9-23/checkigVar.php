<?php
#is_int
#is_string
#is_bool
#is_null
#is_float
// class checkingVar
// {
//     public function showresult($num)
//     {
//         if (is_int($num)) {
//             echo "Your number is integer";
//         } else {
//             die("We need integer data type");
//         }
//     }
// }
// $answer = new checkingVar();
// $answer->showresult(23.9);


// class checkingVar
// {
//     public function showresult(string $num)
//     {
//         var_dump($num);
//     }
// }
// $answer = new checkingVar();
// $answer->showresult("23");

class test
{
}
class checkingVar
{
    public function showresult(test $num)
    {
        var_dump($num);
    }
}
$t = new test();
$answer = new checkingVar();
$answer->showresult($t);