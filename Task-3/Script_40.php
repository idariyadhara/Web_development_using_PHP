<?php

// Script_40 Develop a PHP script to remove and replace elements from an array using the array_splice() function.

$a1=array("a"=>"Rose","b"=>"Daisy","c"=>"Sunflower","d"=>"Lily");
$a2=array("a"=>"Lotus","b"=>"Jasmine");
array_splice($a1,0,2,$a2);
print_r($a1);

/*output:
Array ( [0] => Lotus [1] => Jasmine [c] => Sunflower [d] => Lily )*/

?>