

<?php

include 'connecting.php';
$nameErr = $emailErr = $myPassErr = $cPassErr = "";
$name = $email  =  "";
$Sname =$_POST["Sname"];
$myPass =$_POST["myPass"];
$cPass =$_POST["cPass"];
/* $myPass=md5($myPass1,true);
$cPass=md5($cPass1,true); */
// echo "My Password is ".md5($myPass,true);
/* echo "<BR>MY PASSWORD IS ".$cPass;
echo "<br> my secound password is ".$myPass; */



$flag= true;
if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
   //  echo ($nameErr);
    $flag= false;
} else {
    $name = test_input($_POST["fname"]);
    // For name Validation
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      //   echo ($nameErr);
      $flag= false;
    }
    
    else if ( strlen($name) <= 2 || strlen($name) >= 40) {
        $nameErr="Name has to be between 2 to 40 characters";
      //   echo strlen($name);
      $flag= false;
    }
}

if (empty($_POST["email"])) {
    $emailErr = "Email is required<br>";
   //  echo($emailErr);
   $flag= false;
} else {
    $email = test_input($_POST["email"]);
    // for email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format<br>";
      //   die($emailErr);
      $flag= false;
    }
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $myPass)) {
      $cPassErr='the password does not meet the requirements!';
      $flag= false;
   }
   
   if(empty($myPass)){
      $myPassErr= "Password is required";
      $flag= false;
   }
   elseif($myPass===$cPass){
      $myPass1=md5($myPass);
      // $cPass1=md5($cPass,true);
      // echo "Successfully matched";
      $flag=true;
   } 
 else{
   $passwordErr= "Password doesnot match";
   $flag= false;
 }

}

if($flag){
     $sql1="INSERT INTO `signupTable` (`Fname`, `lname`, `Email`, `Password`) VALUES ('$name', '$Sname', '$email', '$myPass1');";


     $result2=mysqli_query($connect,$sql1);

// Check for the table creation success
if($result2){
    $successMsg = " Account Successfully Created";
}
else{
    echo "account could not created---> ".mysqli_error($connect);
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginSignUp.css">
</head>

<body>

    <div class="conatiner">
    <form action="" name="myForm" class="form  formHid " id="SignUp"  method="post">

      <!-- <form action="login.html" class="form formHie" id="signIn"> -->
        <h1 class="form_title">Create Account</h1>
        <!-- <div class="message  errorMessage">Incorrect User name or pass Word</div> -->
        
        <div><?php $successMsg ?></div>
            <div class="inputFieldsName">
                <input type="text" name="fname" class="inputText fname" id="fname" autofocus placeholder="Enter Your First Name">
                <input type="text" name="Sname" class="inputText Sname" id="Sname" autofocus placeholder="Enter Your Last Name">
                <!-- <div class="inputError">False Name </div> -->
               </div>
               <span style="color:blue;"> <?php echo $nameErr;?> </span>

            <div class="inputFields">
               <input type="text" class="inputText" id="email" title=$emaillErr name="email" autofocus placeholder="Enter Your E-mail">
               <span class="error"> <?php echo $emailErr;?> </span>
               <!-- <div class="inputError">False Name </div> -->
            </div>
           
            <div class="inputFields">
               <input type="password" name="myPass" id="ConfirmPassword" class="inputText" autofocus placeholder="Confirm Your PassWord">
              <span class="error"><?php echo $cPassErr;?></span>
               <!-- <div class="inputError">PassWord is Incorrect </div> -->
            </div>
            
            <div class="inputFields">
               <input type="password" name="cPass" id="ConfirmPassword" class="inputText" autofocus placeholder="Confirm Your PassWord">
               <span class="error"><?php echo $passwordErr;?> <span>
                <!-- <div class="inputError">PassWord is Incorrect </div> -->
             </div>

             <button class="button" >
               Create Account
             </button>
            <!-- <p class="fromlink">
               <a href="" class="link">Forget your Password</a>
            </p> -->

            <p class="fromlink">
               <a id="Already_have_account" href="login.html" class="link">Already have an account?</a>
            </p>

       </form>
       </form>
      
</div>


</body>
</html>