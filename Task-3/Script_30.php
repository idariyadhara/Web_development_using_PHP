<?php

//Script_30 Create a PHP script that removes duplicate values from an array using the array_unique() function.

$a=array("a"=>"Red","b"=>"Blue","c"=>"Red");
print_r(array_unique($a));

/*Output:
Array ( [a] => Red [b] => Blue )*/
?>