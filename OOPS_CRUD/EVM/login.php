<?php
include "comp/nav.php";
if(isset($_POST['submit'])){
    include "comp/dbConnect.php";
    $email=$_POST['email'];
    $password=$_POST['password'];

$query="SELECT * From `Users` where Email='$email' AND Password='$password'";

/* $sql = "Select * from `SignUpForm` where email='$email2' AND password='$mythispass'"; */
$result=mysqli_query($conn,$query);
$value=mysqli_num_rows($result);
/* if($value>0){
  echo "credential not matched";  
}else{
echo "credential not matched";
} */
$data=mysqli_fetch_assoc($result);
$name=$data['Name'];
$img=$data['img'];
echo "hi". $name;


session_start();
$_SESSION['name']=$name;
$_SESSION['img']=$img;
// echo "mai session".$_SESSION['name'];
if($result){
    // return header('location:Home.php');
    // echo "successfully Fetched".$name;
}else{
    echo "can not get Result because of ".mysqli_error($conn);
}
// echo "hi".$result;

}



?>
<div class="d-flex justify-content-center p-2 mt-4">
<form action='<?php $_SERVER['PHP_SELF'] ?>' method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <button type="submit" name="submit" class="btn btn-primary">Login</button>
  </div>
</form>
</div>