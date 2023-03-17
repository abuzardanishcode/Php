<?php


$name= $_POST['name'];
$pass=$_POST['password'];
$email=$_POST['email'];
/* Making a successfull connection with db */
class users{
    private $con;

    public function __construct(){

        $this->$con=mysqli_connect('localhost','root','Hrhk@9090','OOPS');

        if(mysqli_connect_error()){
            echo "having problem in".mysqli_connect_error();
        }
        else{
            echo "Successfully connected";
        }
      
    }
    /* Making Successfull insertion */
  /*   public function insertData($data){
       echo '<pre>' ; print_r($data); die;
 
    }
 */
public function insertData($data){
    //    echo '<pre>' ; print_r($data); die;
       $query="INSERT INTO  `CRUD_table` ('Serial No','Name','Email','Password') values ('NULL','$name','$email','$password')";

       $result=mysqli_query($this->con,$query);
       if($result){
        echo "Successfully Inserted";
       }
       else{
        echo "Error".mysqli_error($this->con);
       }
    }

    




}
// include_once 'oops_insert.php';

$user= new users();
if($_POST['submit']){
    // echo "yes";die;
    $user->insertData($_POST);
}


?>

<html>
<body>
    <form action="" method="post">
       <input type="text" name="name" id="">
       <input type="password" name="email" id="">
       <input type="password" name="pass" id="">
       <input type="submit" name="submit" value="SubmitHere">
    </form>
</body>
</html>



