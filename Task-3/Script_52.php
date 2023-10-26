<?php

//Script_52 Develop a PHP script to merge two associative arrays using the array_merge() function and display the combined result.

$array1 = array("Red","Blue","Black");
$array2 = array("Purple","Yellow","Green");
$result = array_merge($array1, $array2);
print_r($result);
?>