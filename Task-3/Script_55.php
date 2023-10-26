<?php

//Script_55 Develop a PHP script that uses the array_key_first() and array_key_last() functions to retrieve the first and last keys of an array.

$array = ['fruit' => 'Apple', 'flower' => 'Lotus', 'food' => 'Dosa'];

$firstKey = array_key_first($array);
print_r($firstKey);

$lastkey=array_key_last($array);
echo"</br>";
print_r($lastkey);

/*
output:
fruit
food*/

?>