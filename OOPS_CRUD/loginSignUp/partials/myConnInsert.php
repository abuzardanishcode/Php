<?php
require_once 'myConn.php';
$PhoneNo=12;

$sql="INSERT INTO `SignUpForm` (`Name`,`email`,`password`,`Phone`) VALUE ('$user_name','$user_email','$myPass1','$PhoneNo')";

$result2=mysqli_query($conn,$sql);




// Check for the table creation success
if($result2){
$successMsg = " Account Successfully Created";
}
else{
echo "account could not created---> ".mysqli_error($conn);
}



?>