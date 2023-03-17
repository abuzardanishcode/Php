<?php

// if(isset($_post['name'])){
    $server="localhost";
    $username="root";
    $password= "Hrhk@4321";

if($_SERVER['REQUEST_METHOD']=='POST'){

$user1 =$_POST['user'];
$phone=$_POST["phone"];
$password1= $_POST["password"];
$email=$_POST["email"];
$x="hello";
$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database is failed due to".mysqli_connect_error());
}

// echo "my php first page ";
// echo $x;
echo $user1;
echo $password1;
// echo "maine connect kr diya"
$sql = "INSERT INTO `login_page`.`login_table`(`name`,`email`,`phone`,`password`)
VALUES (`$user1`,`$phone`,`$email`,`$password1`);";
echo $sql;


if($con->query($sql)==true){
    echo "successfully inserted";
}
else{
    echo "error in connecting: `$con->error`";
}


   $con->close();
}




?>





