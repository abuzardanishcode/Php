<?php

include "component/connection.php";


$fnameerr=$lnameerr=$mobileerr=$emailerr=$cityerr=$successmsg="";
$msgerr="Please write msg";
if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mobile=$_POST['phone'];
  $email=$_POST['email'];
  $city=$_POST['CITY'];
  $msg=$_POST['message'];

  $flag= true;
  if (empty($fname)) {
      $fnameerr = "Name is required";
     
      $flag= false;
  } else {
      $name = test_input($fname);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $fnameerr = "Only letters and white space allowed";
          $flag= false;
      }
      
      else if ( strlen($name) <= 2 || strlen($name) >= 40) {
          $fnameerr="Name has to be between 2 to 40 characters";
          $flag= false;
      }
  }
  
  if (empty($mobile)) {
    $mobileerr = "Name is required";
    $flag= false;
} else {
    $mobil = test_input($mobile);
    if (!preg_match("/^[1-9][0-9]{9}$/",$mobil)) {
        $mobileerr = " total no must be 10";
        $flag= false;
    }
    
}
  if (empty($email)) {
      $emailerr = "Email is required";
      $flag= false;
  } else {
      $email = test_input($email);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailerr = "Invalid email format<br>";
          $flag= false;
      }
  }

  if (empty($msg)) {
    $msgerr = "message is required";
    $flag= false;
}else{
    $msg= test_input($msg);
    if ( strlen($msg) <= 20 || strlen($msg) >= 100){
        $msgerr="message sholud be in between 20 to 100 letters";
        $flag= false;
    }

}






if($flag){

$sql="INSERT INTO `details` (`Id`, `first_name`, `last_name`, `Mobile_no`, `email`, `city`, `message`) VALUES (NULL, '$fname', '$lname', '$mobile', '$email', '$city', '$msg')";

if(mysqli_query($conn,$sql)){
    $successmsg = "successfully Inserted";
    session_start();
    if(!empty($_SESSION["name"])){
  
        header("location:welcome.php");   
 }
}else{
    echo "having some issue".mysqli_error($conn);
}
}
}/* else{
   echo "you could not submitted properly";
} */

include "form.php";


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>