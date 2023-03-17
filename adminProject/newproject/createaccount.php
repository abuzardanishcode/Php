<?php

require_once('conn.php');
if(isset($_POST['submit'])){
     
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $qualification=$_POST['qualification'];



$query="INSERT INTO `Account_details` (`Name`, `email`, `password`, `Qualification`) VALUES ('$name' , '$email' , '$pass' , '$qualification')";
 

$result=mysqli_query($conn,$query);

if($result){
    echo "data inserted successfully in the table ";
}else{
    die("having some error in data inserting".mysqli_error($conn));
}

}else{
    echo "Please enter right key";
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
      <form class="login-form" action="createaccount.php" method="post">
        <h1>Login</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="name" placeholder="enter your name" required>
        <label for="username">E mail:</label>
        <input type="text" id="username" name="email" placeholder="enter your name" required>
        <label for="username">Password:</label>
        <input type="text" id="username" name="password" placeholder="enter your name" required>
        <label for="username">Qualification:</label>
        <input type="text" id="username" name="qualification" placeholder="enter your name" required>
        <button type="submit" name="submit">Create Account</button>
        <a href="#">Forgot Password?</a>
      </form>
    </div>
  </body>
</html>
