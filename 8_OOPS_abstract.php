<!-- Abstract class ki koi bhi object nahi8 bana sakte hai  -->

<!-- abstract class / -->
<?php


abstract class parentClass{
     public $name;

    //  we make abstract method becuase ye compulsory hota hai.
    abstract protected function calc($a,$b);
}


class childClass extends parentClass{

    function calc($c ,$d){  //Abstract method ki hi tarah ye faunction honaa chaahiye nahi to error dega 
        echo ($c+$d );
    }

}

// "."ABstract classs ka koi bhi object nahi ban skta isliye hum derived class ka object banaayenge use access karne k liye 

   $myObj=new childClass();

  echo  $myObj->calc(20,30);

  /* 
     Real life example
     Personal info
     Library 
     Fees
     marks
  
  */