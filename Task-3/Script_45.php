<?php

//Script_45 Create a PHP script that flips the keys and values of an associative array using the array_flip() function.

$a=array("1"=>"Red","2"=>"Blue","3"=>"Green");


$flipped = array_flip($a);

print_r($flipped);

/*output:
Array ( [Red] => 1 [Blue] => 2 [Green] => 3 )*/

?>