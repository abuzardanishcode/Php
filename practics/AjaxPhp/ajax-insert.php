<?php

// try{
   
/* if (empty($_POST["first_name"])) {
        $nameErr = "Name is required";
        echo ($nameErr);
    } 
    else {
        $name = ($_POST["fname"]);
        // For name Validation
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "<br>Only letters and white space allowed<br>";
            echo ($nameErr);
        }
         */
    /*    else if ( strlen($name) <= 2 || strlen($name) >= 40) {
            die("<br>Name has to be between 2 to 40 characters<br>");
            echo strlen($name);
        } */
      /*     else{
            $conn=mysqli_connect('localhost','root','Hrhk@9090','ajaxdb') or die("some issue occured".mysqli_connect_error());
            $first_name= $_POST['first_name'];
            $last_name =$_POST['last_name'];
            $id=$_POST['id'];
          } */
         /*    $sql ="INSERT INTO `student` (`Id`,`First Name`,`Last Name`) VALUES ('$id','$first_name' ,'$last_name');";

          $result=mysqli_query($conn,$sql);

          if($result)
          {
          echo 1;
            }
         else{
    echo "0".mysqli_error($conn);
     } */
       

   
$conn=mysqli_connect('localhost','root','Hrhk@9090','ajaxdb') or die("some issue occured".mysqli_connect_error());
$first_name= $_POST['first_name'];
$last_name =$_POST['last_name'];
$id=$_POST['id'];

$sql ="INSERT INTO `student` (`Id`,`First Name`,`Last Name`) VALUES ('$id','$first_name' ,'$last_name');";

$result=mysqli_query($conn,$sql);

if($result)
{
    echo 1;
}
else{
    echo "0".mysqli_error($conn);
}
    
 /*   throw new Exception("Having Some Error");

} */
/* catch(Exception $e){
    $e.getMessage();
} */

?>