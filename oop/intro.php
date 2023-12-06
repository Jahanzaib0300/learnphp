<?php
//  oop object oriented programming
//   oop work for two method: class and object
// class has two properties  
// properties : wich define variables
// method : use for properties values

// important : when we store method in class we use properties and when calculation properties then we use method,
class calculation{
 public $a,$b,$c;  // properties
 // method
  function mul(){
    $this->c = $this->a * $this->b;
    return $this->c;
  }
 
}
// object
$th = new calculation();
$th->a = 30;
$th->b = 40;
echo "multiply for:". $th->mul(). "<br>";

class fruit{
 public $name;
 public $colours;
 function set_name($name){
  $this->name = $name;
  }
  function set_colour($colours){
    $this->colours = $colours;
  }
 
  function get_name(){
    return $this->name;
  }
  function get_colour(){
    return $this->colours;
  }

}
 $apple = new fruit();
 $apple->set_name("apple");
 $apple->set_colour("red");
  echo "the fruit is:". $apple->get_name() . "<br> and the color is:". $apple->get_colour();


 



?>