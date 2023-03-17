<?php

/* $sever="localhost";
$user="root";
$password="Hrhk@9090";
$database="login_page";


$connect= mysqli_connect($sever,$user,$password,$database);

if(!$connect){
   echo("unable to connect ".mysqli_connect_error());
}
else{
echo "Successfully Connected";
} */

include 'connecting.php';
/* if($cPass==$myPass){
$sql="INSERT INTO `signupTable`(`Fname`, `lname`, `Email`, `Password`) VALUES ($fname, $Sname, $email, $myPass);";

$connection=mysql_query($connect,$sql);
if($connection){
echo "Successfully Inserted ";

}
else{
echo "Sorry Some error occured can not inser".mysqli_error($connect);
}
} */
/* $fname =$_POST["fname"];
$Sname =$_POST["Sname"];
$email =$_POST["email"];
$cPass =$_POST["cPass"]; */

$nameErr = $emailErr = $myPassErr = $cPassErr = "";
$name = $email  =  "";

// $fname =$_POST["fname"];
$Sname =$_POST["Sname"];
$myPass =$_POST["myPass"];
$cPass =$_POST["cPass"];
echo "<BR>MY PASSWORD IS ".$cPass;
echo "<br> my secound password is ".$myPass;

// function checkValidation(){
if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
    echo ($nameErr);
} else {
    $name = test_input($_POST["fname"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed<br>";
        echo ($nameErr);
    }
    
    else if ( strlen($name) <= 2 || strlen($name) >= 40) {
        die("Name has to be between 2 to 40 characters<br>");
        echo strlen($name);
    }
}

if (empty($_POST["email"])) {
    $emailErr = "Email is required<br>";
    echo($emailErr);
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format<br>";
        echo($emailErr);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $myPass)) {
        die('<br>the password does not meet the requirements!<br>');
    }

 if($myPass===$cPass){

    echo "Successfully matched";
    $sql1="INSERT INTO `signupTable` (`Fname`, `lname`, `Email`, `Password`) VALUES ('$name', '$Sname', '$email', '$myPass');";


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



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
















































<!-- // if($myPass==$cPass){
//     echo("Password could not match");
// } -->
<!-- if (strlen($fname) == 0 || strlen($fname) == null) {
    alert("Name cant be empty")
}

if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
  }



else if ( strlen($fname) <= 2 || strlen($fname) >= 40) {
    alert("Name has to be between 2 to 40 characters")
}
else if (strlen($email) == 0) {
    alert("Please fill in email");
} else if (strlen($myPass) == 0) {
    alert("Please fill in password");
} else if ( strlen ($myPass)< 8) {
    alert("Minmum of password 8");
} else if (!password.match(numbers)) {
    alert("please add 1 number in password");
} else if (!password.match(upperCaseLetters)) {
    alert("please add 1 uppercase letter in password");
} else if (!password.match(lcCharacter)) {
    alert("please add 1 lowercase letter in password");
} else if (!password.match(special)) {
    alert("please add 1 special letter");
} else if (ConfirmPassword != password) {
    alert("password and confirm password should match");
}

$sql="INSERT INTO `login_page`(`Fname`, `lname`, `Email`, `Password`) VALUES ($fname, $Sname, $email, $myPass);";

$connection=mysql_query($connect,$sql);
if($connection){
    echo "Successfully Inserted ";

}
else{
    echo "Sorry Some error occured can not inser".mysqli_error($connect);
}


?> -->