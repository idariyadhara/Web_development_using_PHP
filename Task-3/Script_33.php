<?php

//Script_33 Create a PHP script to check if a specific key exists in an associative array using the array_key_exists() function.

$a=array("Kitkat"=>"XC90","DairyMilk"=>"X5");
if (array_key_exists("Kitkat",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }

  /*Output:
  Key exists!*/
?>