 <?php

Class Database{
    
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "Hrhk@90";
    private $db_name = "Boottrap";

    private $mysqli ="";
    private $result= array();
    private $conn= false;

    
    public function __construct(){
    if(!$this->conn){
           $this->mysqli=new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
           $this->conn=true;

         try {
             if($this->mysqli->connect_error){
                echo $this->mysqli->connect_error();
                return false;
             }
             throw new Exception("Error Processing Request");
             
             
         } catch (Exception $e){
          die($e.getMessage());
         } /* {
            
         }  
           }else{
             return true;
           }
        */}
    }








    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
              $this->conn= false;
               return true;
            }
        }else{
            return false;
        }
    }

}


  ?>
<!-- <?php
/* 
define("Db_server","localhost");
define("Db_user","root");
define("Db_password","Hrhk@9090");
define("Db_database","form_login");

class connection
{

 public $conn;
 public function __construct(){
 //  mysqli_connect();
}

public function connect()
{
    try
    {
        $conn=mysqli_connect(Db_server,Db_user,Db_password,Db_database);
        //var_dump($conn);
        if(!$conn)
        {
            throw new Exception("Error Processing Request");
            
        }
           return $conn;
    
    }
    catch(Exception $e)
    {
        //$e->getMessage();
        die( $e->getMessage());
    }
}
}

 */

?> -->