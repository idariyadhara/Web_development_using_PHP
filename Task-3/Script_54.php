<?php

//Script_54 Create a PHP script that extracts a specific column from a multidimensional array using the array_column() function.

// Array representing a possible record set returned from a database
$records = array(array('id' => 2135,'first_name' => 'Dhara','last_name' => 'Idariya',),
    array('id' => 3245,'first_name' => 'Disha','last_name' => 'Harsoda',),
    array('id' => 5342,'first_name' => 'Mansee','last_name' => 'Adhiya',),
    array('id' => 5623,'first_name' => 'Vishwa','last_name' => 'Vyas',)
);
 
$first_names = array_column($records, 'first_name');
print_r($first_names);

/*
Output:
Array ( [0] => Dhara [1] => Disha [2] => Mansee [3] => Vishwa )*/
?>