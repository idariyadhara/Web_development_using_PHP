<?php
// Script_28 Develop a PHP script that sorts an array of integers in ascending order using the sort() function.

$a=array(5,7,10,8,4,15);
sort($a);

foreach($a as $result)
{
    echo "$result"."<br>";
}

?>