<?php
// hum aik common functions ko multiple class main use karne ko trait kahtay hain
// aik trait main functions classes ko hum use kar saktay hain
// aik page main hum multiple trait ko use kar saktay hain

trait hello{

public function sayhello(){
    echo"hello everyone\n";
}}

trait you{

    public function good(){
        echo"good everyone\n";
    }

    public function morning(){
        echo"good morning\n";
    }

}

 class base{
    use hello,you;
}


$obj= new base();
$obj->sayhello();
$obj->good();
$obj->morning()."<br>";


// Method Overriding 
 // hamare pas 3 functions same name ke to jis function ka object bana hoga pahlay wohi call hoga
 

trait evening{
    private function night(){
        echo" good evening";
    }

}
class base2{
    use evening{
        evening::night as public night2; // rename 
    }
}
 
 $session= new base2();
 $session->night2();
//  jo 2 function same banay hain to priotry level trait ka hoga
// ab child class ko jo function bana ha to object main child class hi call hogi 

// jab 2 traits main same name ke function ho to 1 function hi chalay ga 
// is ke liya hum insteadof use karain gain

// or agar kisi function ko rename karna ho to as ka keyword use hoga

// agar kisi privated or protected function ko use karna ho to pahly ose public banana paray ga
// is le liya AS keyword use hoga





?>