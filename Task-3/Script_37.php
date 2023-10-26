<?php 

/* Script_37 Develop a PHP script that uses the array_push() function to add elements to an array and the array_pop() function to remove elements from the end
*/

//Declaring an array
$arr = array(); 
  
// Adding the first element 
array_push($arr, 1, 2, 3, 4, 5); 
  
print_r("Array after multiple insertions </br>"); 
print_r($arr); 
array_pop($arr); 
  
// Single array pop 
print_r("</br>Array after a single pop </br>"); 
print_r($arr); 
  
/*
Array after multiple insertions
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
Array after a single pop
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )*/

?>