<?php


// include_once 'oops_conn.php';
class newUser{

public function insertData($data){
    //    echo '<pre>' ; print_r($data); die;
       $query="INSERT INTO  `CRUD_table` ('Serial No','Name','Email','Password') values ('NULL','$name','$email','$password')";

       $result=mysqli_query($con,$query);
       if($result){
        echo "Successfully Inserted";
       }
       else{
        echo "Error".mysqli_connect_error($con);
       }
    }

    
    
    
// }
}
/* $user= new newUsers();
if($_POST['submit']){
    // echo "yes";die;
    $user->insertData($_POST);
} */

?>