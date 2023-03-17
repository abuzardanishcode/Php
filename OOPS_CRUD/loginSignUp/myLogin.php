<?php
include_once 'partials/connection.php';

$login = false;
$showError = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/myConn.php';
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $mythispass=md5($password);
    // $email2=md5($email);
     
    echo $mythispass ."and".$email;
    $sql = "Select * from `SignUpForm` where email='$email' AND password='$mythispass'";
    $result = mysqli_query($conn, $sql);

  /*  $row =mysqli_fetch_assoc($result);
   $name= $row['Name'];
   $myemail =$row['email']; */

  $output="";
if (mysqli_num_rows($result)>0) 
{ 
   $output ='<table border="1" width="100%" cellspacing="0" cellpadding="18px">
   <tr>
   
     <th>Id</th>
     <th>User Name</th> 
     <th>Email</th>
     <th>Password</th>
     <th>phone</th>
    </tr>';
}
   
   while ($row=mysqli_fetch_assoc($result)) 
   {
     $output.="<tr>
     <td>{$row['Id']} <br></td>
     <td>{$row['Name']}<br></td>
     <td>{$row['email']}<br></td>
     <td>{$row['password']}<br></td>
     <td>{$row['Phone']}<br></td>
 
     </tr>";
    }
/*     if($result){
        echo "successfully maked sql query";
    }else{
        echo mysqli_error($conn);
    } */

    
    $num = mysqli_num_rows($result);
    // echo $num;
    
    if ($num >0){
//    try{
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['Name']=$name;
        $_SESSION['output']=$output;
        // setcookie("category","$output", time()+86400,"/");

        header("location: welcome.php");

    } 
    else{
        $showError = "Invalid Credentials";
        // setcookie("category","$showError", time()+86400,"/");
    }
}
    
include 'login.php';

/* $user_email=$_POST["email"];
$user_password=$_POST["password"];

if(isset($_POST["submit"])){  
  
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user_email=$_POST['email'];  
        $user_password=$_POST['password'];  
      
        $con=mysql_connect('localhost','root','') or die(mysql_error());  
        mysql_select_db('user_registration') or die("cannot select DB");  
      
        $query=mysql_query("SELECT * FROM login WHERE email='".$user_email."' AND password='".$user_password."'");  
        $numrows=mysql_num_rows($query);  

        if($numrows>0){
            echo "sucessfullyLogin";
        }else{
            echo "could not login";
        }
        */
       /*  if($numrows!=0)  
        {  
        while($row=mysql_fetch_assoc($query))  
        {  
        $dbemail=$row['email'];  
        $dbpassword=$row['password'];  
        }  
      
        if($user == $dbemail && $pass == $dbpassword)  
        {  
        session_start();  
        $_SESSION['sess_user']=$user;  
      
        /* Redirect browser */  
/*         header("Location: member.php");  
        }  
        } else {  
        echo "Invalid email or password!";  
        }  
      
    } else {  
        echo "all fields are required";
    }
} */ 
/* if(isset($_POST['email'])){
    $userEmail=$_POST['email'];
    $myPass=$_POST['password'];
}

$sql= "SELECT * from `SignUpForm` where password='".md5($myPass)."' AND email='".$user_email."'; ";

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
} */




 ?>