<?php
include "component/connection.php";
// $msg="";
include "component/header.php";
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * From `admin` where Name='$email' AND Password='$password'";
    $result=mysqli_query($conn,$sql);
   /* if($result){
    echo "query runned succesfully";
   }else{
    echo "error occured".mysqli_error($conn);
   }
 */

    if(mysqli_num_rows($result)>0){
    session_start();
        $_SESSION["name"] = $email;
        $_SESSION["password"] = $password;
        // echo "you are successfully login";
        header("location:welcome.php");
    }else{
        $successerr ="It seems that you are not an admin";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
<main class="main">
	<div class="container">
		<section class="wrapper">
			<div class="heading">
                <p><?php echo $msg ?></p>
				<h1 class="text text-large">Sign In</h1>
			</div>
               <span><?php echo $successerr  ?></span>
			<form action="" method="POST" name="signin" class="form">
				<div class="input-control">
					<label for="email" class="input-label" hidden>Email Address</label>
					<input type="email" name="email" id="email" class="input-field" placeholder="Email Address">
				</div>
				<div class="input-control">
					<label for="password" class="input-label" hidden>Password</label>
					<input type="password" name="password" id="password" class="input-field" placeholder="Password">
				</div>
                <input type="submit" name="submit" value="Login">
			</form>
			
		</section>
	</div>
</main>
</body>
</html>