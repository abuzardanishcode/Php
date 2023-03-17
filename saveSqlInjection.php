<?php

try{
if (isset($_post[submit])) {
$server ="localhost";
$user="root";
$password="Hrhk@9090";
$database="DbAbuzar";

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$age=$_POST['age'];
$con=mysqli_connect($server,$user,$password,$database);

if(!con){
    die("Not connected because".mysqli_connect_error());

}
echo "successfullly connected";


$sql="INSERT INTO `sqlTable` (`First Name`,`Last Name`,`Age`)  VALUES($fname,$lname,$age)";

$result= mysqli_query($con,$sql);

if(!result){
    echo "Can not inserted because".mysqli_error($result);
}
else "SuccessFully Inserted";

throw new Exception("Error Processing Request");
}
}
catch(Exception $e)
{
    echo $e->getMessage();
}


?>

