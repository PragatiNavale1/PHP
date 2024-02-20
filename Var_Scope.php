<?php
$a=4;           //global scope

function fun1()
{
    $a=0;      //Local variable
    GLOBAL $a;    //Global variable
    STATIC $y=0;

    print "a inside function is $a.";
    $a++;
    print "GLOBAL VARIABLE A= $a";
    $y++;
    print "$y"
    print "<br>";

}

fun1();
print "a outside of function is $a.";

?>
