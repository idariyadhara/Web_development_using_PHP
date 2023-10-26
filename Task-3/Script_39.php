<?php  

//Script_39 Create a PHP script that extracts a portion of an array using the array_slice() function and displays the result.


$student=array("Dhara","Disha","Riya","Yashvi","Vishwa");  
print_r(array_slice($student,1,2)); 
/*output:
Array ( [0] => Disha [1] => Riya )*/ 
?>  
