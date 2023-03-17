<?php
$nameErr = $emailErr = $successMsg=$myPassErr = $cPassErr = "";
$name = $email  =  "";
$Sname =$_POST["Sname"];
$myPass =$_POST["Password"];
$cPass =$_POST["cPassword"];

include 'partials/_nav.php';




$flag= true;
if (empty($_POST["Name"])) {
    $nameErr = "Name is required";
    $flag= false;
} else {
    $name = test_input($_POST["Name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        $flag= false;
    }
    
    else if ( strlen($name) <= 2 || strlen($name) >= 40) {
        $nameErr="Name has to be between 2 to 40 characters";
     
        $flag= false;
    }
}

if (empty($_POST["email"])) {
    $emailErr = "Email is required<br>";
  
   $flag= false;
} else {
    $email = test_input($_POST["email"]);
    // for email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format<br>";
    
      $flag= false;
    }
}

if(empty($_POST['PhoneNo'])){
    $phoneErr="Mobile No is required";
    $flag=false;

    }else{ 
        $PhoneNo = test_input($_POST['PhoneNo']);
        if (strlen ($PhoneNo)!= 10) {  
        $phoneErr = "Mobile no must contain 10 digits.";  
        $flag=false;
         } 
     }




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($myPass)){
       $myPassErr= "Password is required";
       $flag= false;
    }
   if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $myPass)) {
      $cPassErr='the password does not meet the requirements!';
      $flag= false;
   }
   
   elseif($myPass===$cPass){
      $myPass1=md5($myPass);
      $flag=true;
   } 
 else{
   $passwordErr= "Password doesnot match";
   $flag= false;
 }

}

include 'signup.php';

if($flag){
// include 'partials/myConn.php';
// include('connection.php');
try {
 
include('partials/connnectWithclass.php');

$obj1=new Database();

echo "hello dear";
$sql="INSERT INTO `SignUpForm` (`Name`,`email`,`password`,`Phone`) VALUE ('$name','$email','$myPass1','$PhoneNo')";

$result2=mysqli_query($obj1->connect(),$sql);
if(!$result2){
throw new Exception("Error Processing Request");
}
}
catch(Excepion $e){
   echo $e->getMessage();
    
}



// Check for the table creation success
if($result2){
// $successMsg = " Account Successfully Created";
header("location:success.php");

// echo "hmm hogaya";
}
else{
echo "account could not created---> ". mysqli_error($conn);
// header("location:success.php");
}

}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>