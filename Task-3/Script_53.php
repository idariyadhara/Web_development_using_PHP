<?php

//Script_53 Write a PHP script that removes duplicate values from an associative array using the array_unique() function.

$a=array("Red","Green","Red","Yellow");
print_r(array_unique($a));

/*output:
Array ( [0] => Red [1] => Green [3] => Yellow )*/

?>