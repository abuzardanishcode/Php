<?php
/* $sever="localhost";
$user="root";
$password="Hrhk@9090";
$database="login_page"; */
 
include 'connecting.php';

// $userEmail=$_POST["email"];
// echo $userEmail;
// $myPass=$_POST["myPass"];

/* $connect= mysqli_connect($sever,$user,$password,$database);

if(!$connect){
   die("<br>unable to connect". $mysqli_connect_error());
}
else{
   echo "<br>Successfully Connected";
} */

/* $sql = "SELECT * FROM users WHERE user_name='$userEmail' AND password='$myPass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['user_name'] === $userEmail && $row['password'] === $myPass) {

        echo "Logged in!";
    }
    echo "can not login";
} */


// mysqli_select_db($database);

if(isset($_POST['email'])){
    $userEmail=$_POST['email'];
    $myPass=$_POST['myPass'];
}

$sql= "SELECT * from `signupTable` where Password='".md5($myPass)."' AND Email='".$userEmail."'; ";

$result=mysqli_query($connect,$sql);

$msg="Please Enter the details";
$con=0;

if(!empty($_POST["email"])){
if(mysqli_num_rows($result)==1){
    $msg= "You Have Successfully Logged In";
    // exit();
}
else{
    $con++;
    $msgErr="You Entered an incorrect Password";
    
}

if($con==1){
    $msg=$msgErr;
}
}
/* echo $result;
echo $myPass;
if($result==""){
    echo "login Successfull";
}
else{
    echo "Can not match your credential";
}
 */




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
   <form name="m" class="form " id="logIn"
    method="post">
        <h1 class="form_title">Log In</h1>
        <!-- <div class="message  errorMessage">Incorrect User name or pass Word</div> -->
        <?php echo $msg ?>
     
        <div class="for_inputFields ">
           <input type="text" name="email" class="inputText name" id="emailIn" autofocus placeholder="Username or email">
           <!-- <div class="inputError">False Name </div> -->
           <?php echo $nameErr;?>
        </div>
       
        <div class="inputFields">
           <input type="password" name="myPass" class="inputText" id="passwordIn" autofocus placeholder="Enter Your PassWord">
           <i class="eye-icon"></i>
           
         
        </div>
         <button class="button" onclick="logIn">
           Log In
         </button>
       
        <p class="fromlink">
           <a href="" class="link">Forget your Password</a>
        </p>

        <p class="fromlink">
           <a id="createAcount" href="dsignUp.php" class="link">Don't have an account? Create account</a>
        </p>
   </form>
 </div>
  

    </div>
    <!-- <script src="logInSignUp.js"></script> -->
</body>
</html>