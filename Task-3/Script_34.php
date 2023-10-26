<?php

// Script_34 Develop a PHP script to check if a specific value exists in an array using the in_array() function.

$people = array("Dhara", "Disha", "Vishwa", "Janvi");

if (in_array("Dhara", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }

  /*Output:
  Match found*/
?>