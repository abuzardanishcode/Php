<?php

include 'connecting.php';
$nameErr = $emailErr = $myPassErr = $cPassErr = "";
$name = $email  =  "";
$Sname =$_POST["Sname"];
$myPass =$_POST["myPass"];
$cPass =$_POST["cPass"];
/* $myPass=md5($myPass1,true);
$cPass=md5($cPass1,true); */
echo "My Password is ".md5($myPass,true);
echo "<BR>MY PASSWORD IS ".$cPass;
echo "<br> my secound password is ".$myPass;

if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
    echo ($nameErr);
} else {
    $name = test_input($_POST["fname"]);
    // For name Validation
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "<br>Only letters and white space allowed<br>";
        echo ($nameErr);
    }
    
    else if ( strlen($name) <= 2 || strlen($name) >= 40) {
        die("<br>Name has to be between 2 to 40 characters<br>");
        echo strlen($name);
    }
}

if (empty($_POST["email"])) {
    $emailErr = "Email is required<br>";
    echo($emailErr);
} else {
    $email = test_input($_POST["email"]);
    // for email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format<br>";
        die($emailErr);
    }
}
 if(empty($myPass)){
    echo "<br>Password is required";
 }



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $myPass)) {
        die('<br>the password does not meet the requirements!<br>');
    }

 if($myPass===$cPass){
    $myPass1=md5($myPass);
    // $cPass1=md5($cPass,true);
    echo "Successfully matched";
    $sql1="INSERT INTO `signupTable` (`Fname`, `lname`, `Email`, `Password`) VALUES ('$name', '$Sname', '$email', '$myPass1');";


$result2=mysqli_query($connect,$sql1);

// Check for the table creation success
if($result2){
    echo " Account Successfully Created";
}
else{
    echo "account could not created---> ".mysqli_error($connect);
}

 } 
 else{
    die( "Password doesnot match");
 }

}

/* function encryption($str,$iv){
    // $str="HelloMohammadAbuzar";
    $key="Abuzar8068864";
    $chiper="AES-128-CTR";
    $ivLen=openssl_cipher_iv_length($chiper);
    $iv=openssl_random_pseudo_bytes(16);
    $options=0;
    
    $str= openssl_decrypt($str,$chiper,$key,$options,$iv);
    return $str;
} */




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

