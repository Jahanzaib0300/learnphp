<?php
 
 abstract class parentclass {
 public $name;


 abstract protected function calc($a,$b);
 }
class child extends parentclass{
      public function calc($c,$d){
        echo $c+$d;
    }
}

$test = new child();
$test->calc(20,30);
  
// abstract class ka hum object nahi bna saktay os ke liya derived class ko hona zarori ha

// jo bhi hum abstract class bna rahe hain os ka obstract method  hona zarori ha is ko hum declare karain gain lakin implement nahi kary gain.
// jo bhi derived class banate hain os method ko implement karna zarori hota ha
// use public and protected not private 

?>