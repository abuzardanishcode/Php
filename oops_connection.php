<?php


Class connect{
   public $name;
   public $database;
//    public  $conn = "localhost","root","Hrhk@9090","boo";
   public function localhostConn(){
       try {    
        

      function  __construct($db){
        $this->database=$db;
        }

        $conn =  mysqli_connect("localhost","root","Hrhk@9090","$this->data");
           if(!$conn){
          
          throw new Exception("Error Processing Request".mysqli_connect_error());
      } 
     echo "Successfully connected";

    } catch (Exception $m) {
       echo $m->getMessage();
    }
   }



  /*  public function selectfuncAll2(){
    try {
     $conn =  mysqli_connect("localhost","root","Hrhk@9090","Bootstrap");  
       $sql= "SELECT * FROM `SignUpForm`;";
 
       $res= mysqli_query($conn,$sql);
       if(!$res){
           throw new Exception("Error Processing Request".mysqli_error($conn));
           
       }
       echo "successfully Selected";
       
 
    } catch (Exception $m) {
       echo $m->getMessage();
    }
 
  } */



}



 Class selectAll{

   
    public function selectfuncAll(){
       try {
        $conn =  mysqli_connect("localhost","root","Hrhk@9090","Bootstrap");  
          $sql= "SELECT * FROM `SignUpForm`;";
    
          $res= mysqli_query($conn,$sql);
          if(!$res){
              throw new Exception("Error Processing Request".mysqli_error($conn));
              
          }
          echo "successfully Selected";
          
    
       } catch (Exception $m) {
          echo $m->getMessage();
       }
    
     }

 }  


 class insertAll{

    public function  insert(){
       try {
          
       } catch (\Throwable $th) {
       
       }

    }

  




 }










?>