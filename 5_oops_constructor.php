<?php

class person{
     public $name,$age,$address;
     
     function __construct($myName="Danish",$myAge,$myAddress="null"){
        $this->name=$myName;
        $this->age=$myAge;
        $this->address=$myAddress;

     }


     function show(){
        echo "Your Name is ".$this->name."<br>Your age is :".$this->age."<br>Your Address is ".$this->address;
     }
}


// $p2 = new person();
$p=new person("Mohammad Abuzar","19","Village Pasai");

/* $p->name="Mohammad Abuzar";
$p->age= 20;
$p->address="Village & Post pasai Sant kabeer nager "; */



$p->show();
// $p2->show();








?>