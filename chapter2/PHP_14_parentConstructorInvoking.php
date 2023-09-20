<?php

use Member as GlobalMember;

class Member
{
    public function __construct()
    {
        echo "Daddy is your PaPa";
    }
}
class PHP_14_parentConstructorInvoking extends Member
{
    public function __construct()
    {
        parent::__construct();
        echo "baby is a child";
    }
}
new PHP_14_parentConstructorInvoking();