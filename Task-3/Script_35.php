<?php

//Script_35 Write a PHP script to shuffle the elements of an array using the shuffle() function.

$my_array = array("Red","Green","Blue","Yellow","Purple");

shuffle($my_array);
print_r($my_array);
/*
Array ( [0] => Red [1] => Purple [2] => Blue [3] => Green [4] => Yellow )*/
?>