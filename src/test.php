<?php
echo "Test";
require('multiply_fuction.php');

$x=4;
$y=20;
$expect=80;

$answer=multiply($x,$y);

echo "Result: ".$x."*".$y."=".$answer." (expected: ".$expect.")\n";

if ($answer==$expect)
{
    echo "Test Passed";
    exit(0); 
}
else
{
    echo "Test Failed";
    exit(1);
}
