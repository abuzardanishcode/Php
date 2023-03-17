<?php

class baap{
     public $prop,$famMember,$address;
     
     function __construct($property="Danish",$familyMember,$myAddress="null"){
        $this->prop=$property;
        $this->famMember=$familyMember;
        $this->address=$myAddress;

     }


     function show(){
        echo "Your Property is ".$this->prop."<br>Your family member is :".$this->famMember."<br>Your Address is ".$this->address;
     }
}

class beta extends baap{
     public $bahu =1;
     public $pota =3;   
     public $newMember;
     function show(){
         $this->newMember = $this->$famMember +$this->$bahu          +$this->pota;
        echo "<h3>Your Property is </h3>".$this->prop;
        echo "<h3>Your family member is :$this->newMember</h3>";
        echo"<h3>Your Address is $this->address </h3>";
      
     }
   
    
}


$danish=new baap("Mohammad Abuzar",19,"Village Pasai");

$meraBeta= new beta("Danish", 19,"pasai");

$meraBeta->show();
$danish->show();









?>