<?php
$sever="localhost";
$user="root";
$password="Hrhk@9090";
$database="login_page";


$connect= mysqli_connect($sever,$user,$password,$database);

if(!$connect){
   echo("unable to connect ".mysqli_connect_error());
}
else{
echo "Successfully Connected";
}
/* $sql= "SELECT * from `signupTable` where Password='".$myPass."' AND Email='".$userEmail."'; ";
// echo $sql;

$result=mysqli_query($connect,$sql);

echo $result; */




?>