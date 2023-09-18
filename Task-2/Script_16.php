<?php

    $Count = 0;  
      
    $str="Welcome to PHP!!" ;  
    
    $str = strtolower($str);  
    for($i = 0; $i < strlen($str); $i++) {  
              
     
    if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') 
    {  
        $Count++;  
    }  
            
    }  
    echo "Number of vowels : " , $Count;  
  

?>