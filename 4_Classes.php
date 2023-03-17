<?php
/* $to = 'anita.aditi@unthinkable.co';
$subject = 'Testing Of email function';
$message = 'please reply back?'; 
$from = 'mohammad.abuzar@unthinkable.co';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
} */

class calculation{


public $a,$b,$c;

function sum(){
    $this->c=$this->a+$this->b;
    return $this->c;
}
function sub(){
    $this->c=$this->a-$this->b;
    return $this->c;
}
function mul(){
    $this->c=$this->a * $this->b;
    return $this->c;
}
function divide(){
    $this->c=$this->a/$this->b;
    return $this->c;
}



}


/* $myObj=new calculation();
$myObj2=new calculation();

$myObj-> a=10;
$myObj-> b=20;

echo $myObj->sum()."<br>";
echo $myObj->sub()."<br>";
echo $myObj->mul()."<br>";
echo $myObj->divide()."<br>";


$myObj2-> a=80;
$myObj2-> b=20;
echo $myObj2->sub()."<br>"; */
?>