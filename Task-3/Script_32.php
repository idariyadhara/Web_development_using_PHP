<?php

//Script_32 Write a PHP script to merge two arrays using the array_merge() function and display the combined result.

$a1=array("Jimjam","Parle-G");
$a2=array("Monaco","Krackjack");
print_r(array_merge($a1,$a2));

/*
output:
Array ( [0] => Jimjam [1] => Parle-G [2] => Monaco [3] => Krackjack )*/
?>