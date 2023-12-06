<?php
// hash function 
$str="google";
// for store in binary
echo "binary function is:" . md5($str,True)."<br>";
// for store in hexa
echo "hexa function is :" . md5($str)."<br>";

// map function is


function square($j) {
    return $j * $j;
  }
  
  $map = [1, 2, 3, 4, 5];
  
  $new = array_map('square', $map);
   
  
  echo "<pre>";
  print_r($new);
  echo "</pre>";



?>