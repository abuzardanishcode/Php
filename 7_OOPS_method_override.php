<?php

class base{
 
 
    public $name ="My Base class";
 
    public function calc($a,$b){
    return $a+$b;
 }


}



class derived extends base{

    public $name = "chlid class ";
    public function calc($a,$b){
        return $a*$b;
     }
    
}
echo "hello world";

$test =new derived();
echo $test->name;
 echo $test->calc(10,20);


?>