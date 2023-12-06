<?php
// inheritence: accing property one class to another class
// base class and derived class 

class employ{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s){    // __ automaticaly called  // create object
        $this->name = $n;
        $this->age  = $a;
        $this->salary = $s;

    }

    function info(){
        echo "employ name:".$this->name."<br>";
        echo "employ age:".$this->age."<br>";
        echo "employ salary:".$this->salary."<br>";
    }
}

class manager extends employ{
    public $ta = 200;
    public $phone = 300;
    public $total;

    function info(){
        $this->total = $this->salary+ $this->ta+$this->phone;
        echo "employ name:".$this->name."<br>";
        echo "employ age:".$this->age."<br>";
        echo "employ salary:".$this->total."<br>";
        
    }
}
$e1=new manager("ali",23,200);

 $e1->info();

 




?>