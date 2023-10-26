<?php

// Script_41 Write a PHP script that finds the intersection of two arrays using the array_intersect() function.

$array1 = array(2, 4, 6, 8, 10, 12);
$array2 = array(1, 2, 3, 4, 5, 6);

var_dump(array_intersect($array1, $array2));

/*
array(3) { [0]=> int(2) [1]=> int(4) [2]=> int(6) }*/
?>