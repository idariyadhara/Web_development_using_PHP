<?php

//Script_49 Develop a PHP script to split an array into chunks of a specified size using the array_chunk() function.

$flowers=array("Rose","Sunflower","Lily","Merigold","Lotus","Jasmin");
print_r(array_chunk($flowers,2));

/*\
output:
Array ( [0] => Array ( [0] => Rose [1] => Sunflower ) [1] => Array ( [0] => Lily [1] => Merigold ) [2] => Array ( [0] => Lotus [1] => Jasmin ) )
*/
?>