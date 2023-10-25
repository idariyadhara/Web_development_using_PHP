<?php

//20. Reverse the order of the cities in the array from question 19.


$cities=array("Dubai","United Kingdom","Paris","Maldives");

rsort($cities);

foreach($cities as $city)
{
    print_r($city);
    echo "<br>";
}

/*
 OUTPUT:

United Kingdom
Paris
Maldives
Dubai

*/

?>
