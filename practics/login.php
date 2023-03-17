<?php

try{
  include 'connecting.php';
//   session_start();
//   if(isset($_SESSION['submit'])){ 
  if(isset($_POST['email'])){
    $userEmail=$_POST['email'];
    $myPass=$_POST['myPass'];

    /* $_SESSION['email']=$userEmail;
    $_SESSION['myPass']=$myPass; */
}

echo $myPass;
$myPass1=md5($myPass);
// $sql= "SELECT * from `signupTable` where Password='".$_SESSION['myPass']."' AND Email='".$_SESSION['email']."'; ";
$sql= "SELECT * from `signupTable` where Password='".$myPass."' AND Email='".$userEmail."'; ";

echo $sql;
$result=mysqli_query($connect,$sql);



if(mysqli_num_rows($result)==1){
    echo "You Have Successfully Logged In";
    include 'databaseFetching.php';
    exit();
}
// else{
    // echo "You Entered an incorrect Password";

{
throw new Exception("There is an exception occured");
// }
}
}
// }

catch(Exception $e){
    $e->getMessage();
}
// }
/* else{

} */


?>