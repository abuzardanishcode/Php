<?php
$conn=mysqli_connect("localhost","root","Hrhk@9090","newproject") or die("error".mysqli_connect_error());

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $pass=$_POST['password'];
echo $name;
echo $pass;
    $query="SELECT Name From `Account_details` where email='$name' AND password = '$pass'";

    $result=mysqli_query($conn,$query);
    $value=mysqli_fetch_assoc($result);
    foreach($value as $v){
      $name=$v;
    }
   
    if(mysqli_num_rows($result)>0){
          session_start();
          $_SESSION['name']=$name;
          header("location: home.php");
     
    }
   
}





?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="create.css">
  </head>
  <body>
    <div class="container">
      <form class="login-form" action="login.php" method="post">
        <h1>Login</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="name" placeholder="enter your name" required>
        <label for="username">Password:</label>
        <input type="text" id="username" name="password" placeholder="enter your name" required>
        <button type="submit" name="submit">Login Now</button>
        <a href="#">Forgot Password?</a>
      </form>
    </div>
  </body>
</html>