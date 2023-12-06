<?php
// static function
// when we call the function wothout object we use static
class class1 {
    static public $num = 10;
  
    static function fun1() {
      echo "test";
    }
  }
  
  echo class1::$num;
//  echo class1::fun1();
  



?>