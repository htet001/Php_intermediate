<?php

require_once "member.php";
/************************** Reflection Class ***************************/
// $member = new App\member();

// $rc = new ReflectionClass('App\member');

// echo $rc->getName() . "<br>";
// echo $rc->getShortName() . "<br>";
// echo "<hr>";

// showData(get_class_methods($rc));
/************************** Reflection Class ***************************/


/************************** Reflection method ***************************/
// $rm = new ReflectionMethod('App\member', 'getDetailInfo');

// $mem = new App\member();
// $rm->invokeArgs($mem, ['123']);

// echo $rm->isPublic() ? "It is public" : "It is not public";

// showData(get_class_methods($rm));
/************************** Reflection method ***************************/



/************************** Reflection Property ***************************/
// $rp = new ReflectionProperty('App\member', 'detailInfo');
// $mem = new App\member();
// $rp->setAccessible(true);
// showData($rp->getValue($mem));
// showData(get_class_methods($rp));

/************************** Reflection Property ***************************/



/************************** Reflection Parameter ***************************/

// $rpr = new ReflectionParameter(['App\member', 'getDetailInfo'], 0);
// //echo $rpr->isDefaultValueAvailable() ? $rpr->getDefaultValue() : "NO exist";
// echo $rpr->isOptional();
// showData(get_class_methods($rpr));

/************************** Reflection Parameter ***************************/

/************************** Reflection Object ***************************/

$member = new App\member();
$ro = new ReflectionObject($member);
echo $ro->getEndLine();
showData(get_class_methods($ro));

/************************** Reflection Object ***************************/

function showData($ary)
{
    echo "<pre>" . print_r($ary, true) . "</pre >";
}
