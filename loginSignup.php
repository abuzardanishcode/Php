<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="login.css"> -->
</head> 
<body> 
   <?php 
   $server="localhost";
   $password="Hrhk@4321";
   $user="root";
   $dbase="dbAbuzar";

   
   $conn=mysqli_connect($server,$user,$password,$dbase);

   if(!$conn){
     
       die ("can not connect ". mysqli_connect_error());
   }
// if(!$conn){
//     die("Sorry we failled to connect :".mysqli_connect_error());
// }
   echo "Connection successfull";


   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['number'];
   $message=$_POST['comment'];


//    $sql="INSERT INTO ``"

// $sql2= "INSERT INTO `myTable` (`Serial No.`, `Name`, `email`, `password`, `Phone`) VALUES ('4', 'Mohammad Danish', 'danish@gmail.com', 'dk@123', '797563247')";
// I     $sql="INSERT INTO `loginSignUp_table`(`Name`,`Email`, `Number`,`comment`) VALUES ('$name','$email','$phone','$message')";

$sql="INSERT INTO `loginSignUp_table` (`Name`,`Email`,`Number`,`comment`) VALUES ('$name','$email','$phone','$message')  ";

     $result = mysqli_query($conn, $sql);
     if($result){
         echo "Values Successfully Inserted";

     }
     echo "can not Inserted values in DB".mysqli_error($conn);





   ?>
    <div id = "frm">  
    <!-- <h1>Login</h1>   -->
 <h1> PHP Registration Form Example </h1>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">    
  <b> Enter Name: </b> <input type="text" name="name" value="<?php echo $name;?>">  
  <span class="error"> *  <?php echo $nameErr;?> </span>  
  <br> <br>  
 <b> Enter E-mail: </b> <input type="text" name="email" value="<?php echo $email;?>">  
  <span class="error"> * <?php echo $emailErr;?> </span>  
  <br> <br>  
 <b> Enter Number: </b> <input type="number" name="number" value="<?php echo $website;?>">  
  <span class="error"> * <?php echo $websiteErr;?> </span>  
  <br> <br>  
  <b> Message: </b> <textarea name="comment" rows="5" cols="40"> <?php echo $comment;?> </textarea>  
  <br> <br>  
 <b> Select Gender: </b>  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other    
  <span class="error"> * <?php echo $genderErr;?> </span>  
  <br> <br>  
  <input type="submit" name="submit" value="Register ">    

<?php
  $emailErr="incorrect email";
  ?>
</form>  

        <!-- <form name="f1" action = "mynewLogin.php"  method = "POST">  
            <p>  
                <label> Serial No: </label>  
                <input type = "text" id ="name" name  = "serial" />  
            </p>  
            <p>  
                <label> Name: </label>  
                <input type = "text" id ="name" name  = "name" />  
            </p>  
            <p>  
                <label> Email: </label>  
                <input type = "email" id ="email" name  = "email" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
            <p>  
                <label> Phone: </label>  
                <input type = "number" id ="phone" name  = "phone" />  
            </p>  
            
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  



        </form>   -->
    <!-- </div>   -->
<!-- <body class="body"> -->
<!--     <div class="container">

 <div class="bothBOx">     
     <div class="smallContainer">  
     <div class="logoImg">
         <img src="project.logo.png" alt="">
     </div>
   <div class="textContent">
    <div class="BoldText">Hello Again</div>
        <span class="para">To keep connected with please login for best 
            experience</span>
    </div>
</div>  
 <div class="logInBox">
        <div class="loginContent">
        <div class="loginHead">Login Details</div>

        <form action="login.php" class="form">
            <label for="" class="inputHead">Email Address</label>
            <input type="text" name="" id="" class="inputName" value="MohammadAbuzar@gmail.com">
            <label for="" class="inputHead">Password</label>
           <span> <input type="password" name="" id="" class="inputName" value="*********"> <i  class="eye" alt=""> </i>
            <label for="" class="inputHead">Password</label>
            <div class="pwd">
				<input type="password" value="Password *" class="password"/>
				<span class="eye">
					<img src="eye.svg" alt="">
				</span>
			</div>
            
            
            <label for="" class="inputForgat"> <a href="" target="_blank" rel="noopener noreferrer">Forget Password?</a> </label>


            <input type="submit" value="Login" class="btn">
            <p class="signUpText">Don't have an account? <a href="http://" target="_blank" rel="noopener noreferrer" class="sign">SignUp</a></p>
        </form>
    </div>
    </div>

    </div>
</div> -->

</body> 
</html>