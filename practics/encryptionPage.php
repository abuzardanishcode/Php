<?php
include "encryptionConnecting.php"; 
function strEncryption($str){

    $key ="danishkhan";
    $chiper="AES-128-CTR";

    $ivLength= openssl_cipher_iv_length($chiper);
    // echo $ivLength;

   $iv=openssl_random_pseudo_bytes(16);
// $iv=1234567891234567;
    $optioons=0;
    $encrypt = openssl_encrypt($str,$chiper,$key,$optioons,$iv);
     
    return $encrypt;
}

echo "My Str encrypted function is ";
echo strEncryption("My Str encrypted function is");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="loginSignUp.css">
   
</head>
<body>
    <div class="conatiner">
   
<!-- </div>
</div> -->
<div class="login">
   <form action="" name="m" class="form " id="logIn"
    method="post">
        <h1 class="form_title">Log In</h1>
        <!-- <div class="message  errorMessage">Incorrect User name or pass Word</div> -->
     
     
        <div class="for_inputFields ">
           <input type="text" name="email" class="inputText name" id="emailIn" autofocus placeholder="Username or email">
           <!-- <div class="inputError">False Name </div> -->
           <span class="error"><?php echo $nameErr;?></span>
        </div>
       
        <div class="inputFields">
           <input type="password" name="myPass" class="inputText" id="passwordIn" autofocus placeholder="Enter Your PassWord">
           <i class="eye-icon"></i>
           
           <!-- <div class="inputError">PassWord is Incorrect </div> -->
        </div>
         <button class="button" onclick="logIn">
           Log In
         </button>
         <!-- <input type="submit" value="S"> -->
        <p class="fromlink">
           <a href="" class="link">Forget your Password</a>
        </p>

        <p class="fromlink">
           <a id="createAcount" href="signUp.html" class="link">Don't have an account? Create account</a>
        </p>
   </form>
 </div>
  

    </div>
    <!-- <script src="logInSignUp.js"></script> -->
</body>
</html>