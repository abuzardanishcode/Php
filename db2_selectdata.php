<?php

$server="localhost";
$password="Hrhk@4321";
$userName="root";
$dbName="dbAbuzar";

$conn=mysqli_connect($server,$password,$userName,$dbName);

if(!$conn){
    echo "Doesnot connect".mysqli_connect_error();
}
else{
    echo "Successfully Connected<br>";
}

// for selecting on database;

$sql="Select *From `dbAbuzar`";
$selectedDb=mysqli_connect($conn,$sql);

// for selecting on row in associative manner we can use
$num=mysqli_num_rows($selectedDb);
echo "number of row is".$num;
if($num>0){
  $myValue=mysqli_fetch_assoc($selectedDb);
  echo var_dump($myValue);
  echo "<br>";


}




?>