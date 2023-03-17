<?php

include_once 'partials/loginNav.php';

$NameErr = $EmailErr = $GenderErr = $WebsiteErr = $PhoneErr = $agreeErr = "";
$Name = $Email = $Gender = $Comment = $Website = $PhoneNo = $agree= "";
// include_once 'partials/myConn.php';

// include 'signup.php';

// include_once 'variableClass.php';

/* $name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['Password'];
$phone=$_POST['number']; */
/* $cPass=$_POST['cPassword'];
$image=$_POST['fileToUpload']; */
// $image2= "<img src=\"$image\">";
// echo $image2;
/* if(isset($_FILES['image'])){

    print_r($_FILES);
} */
/* if($_SERVER('REQUEST_METHOD')=='POST')
{
    if(empty($_POST['number'])){
    $phoneErr="Mobile No is required";
    }else{
    $phone=$_POST['number'];
    if(!filter_var($phone,FILTER_VALIDATE_INT)){
        $phoneErr="phone no can not contain digits";
    }
    else{
        $user_phone=$phone;
    }
        }


     if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    // echo ($nameErr);
     } else {
    $user_name = test_input($_POST["name"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed<br>";
        // echo ($nameErr);
    }
    
    else if ( strlen($user_name) <= 2 || strlen($user_name) >= 40) {
       $name = "Name has to be between 2 to 40 characters<br>";
        // echo strlen($user_name);
    }
    }

     if (empty($_POST["email"])) {
    $emailErr = "Email is required<br>";
    // echo($emailErr);
    } else {
    $user_email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format<br>";
        // echo($emailErr);
    }
   }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_Pass=$_POST["Password"];
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $user_Pass)) {
        $passErr="the password does not meet the requirements!";
    }
    else{
        $user_Pass1=$user_Pass;
    }
    }
    if(!empty($user_Pass)){
   if($user_Pass1===$cPass){
    $user_Pass2=md5($user_Pass1);
    // echo "Successfully matched";
    $sql="INSERT INTO `SignUpForm` (`Name`,`email`,`password`,`phone`,`Image`) VALUE ('$user_name','$user_email','$user_Pass2','$user_phone',`$image2`)";

    $result2=mysqli_query($conn,$sql);

  // Check for the table creation success
       if($result2){
    echo " Account Successfully Created"; 
    // include 'login.php';
    }
  else{
    echo mysqli_error($conn);
   }

 } 
 else{
    $passMatchErr="Password doesnot match";
 }
   }
   }else{
    echo "your method is not post";
} */
if($_SERVER['REQUEST_METHOD']=='POST')
 {
      
    if (empty($_POST['Name']) ){
        $NameErr = "Name is require";
        }else{
        $Name = valid($_POST['Name']);
        if(!preg_match("/^[a-zA-Z ]*$/", $Name)){
            $NameErr = "Only alphabet and white space is allowed";
        }
    }
        
            
         
    if(empty($_POST['PhoneNo']))
    {
        $PhoneErr = "PhoneNo is required";
    }else
     {
        $PhoneNo = valid($_POST['PhoneNo']);
        if(!preg_match ("/^[0-9]*$/", $PhoneNo))
        {
        $PhoneErr = "Only numeric value is allowed"; 
        } 
        if (strlen ($PhoneNo)!= 10) {  
        $PhoneErr = "Mobile no must contain 10 digits.";  
         } 
     }   
        
    if (empty($_POST['email'])){
        $EmailErr = "Email is required";
    }else{

        $email = valid($_POST['email']);

        if(preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $Email)){
        $EmailErr = "PLease enter valid Email";
         }
       }
    
   /*  if (empty($_POST['Website'])){
        $WebsiteErr = "website is required";
    }else{
        $website = valid($_POST['Website']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
        $WebsiteErr = "PLease enter valid website";
    }
    }
    if(empty($_POST['message'])){
        $Comment = "Message is required";
    }else{
        $comment = valid($_POST['message']);
    
    }

    if(empty($_POST['radio'])){
        $GenderErr = "Gender is required."; 
    }else{
        $Gender = valid($_POST['radio']);
    }

    if (!isset($_POST['check'])){  
        $agreeErr = "Accept terms of services before submit.";  
    } else {  
        $agree = Valid($_POST["check"]);  
        } 
 */
 
 }
include 'signup.php';


/*} */
// }
/* $sql2= "INSERT INTO `signupTable` (`Serial No.`, `Fname`, `email`, `password`, `Phone`) VALUES ('4', 'Mohammad Danish', 'danish@gmail.com', 'dk@123', '797563247')"; */



/* $sql1="INSERT INTO `signupTable` (`Fname`, `lname`, `Email`, `Password`) VALUES ('$name', '$Sname', '$email', '$myPass');";


$result2=mysqli_query($connect,$sql1);

// Check for the table creation success
if($result2){
    echo " Account Successfully Created";
}
else{
    echo "account could not created---> ".mysqli_error($connect);
} */
// echo $cPass ."and my pass is".$user_Pass1;


function valid($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>





