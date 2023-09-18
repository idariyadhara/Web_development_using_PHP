<?php 

$num1=10;
$num2=30;
$num3=20;

if($num1>$num2 && $num1>$num3)
{
    echo "NUM1: $num1 is greatest";
}
else if($num2>$num1 && $num2>$num3)
{
    echo "NUM2: $num2 is greatest";
}
else
{
    echo "NUM3:$num3 is greatest";
}

?>