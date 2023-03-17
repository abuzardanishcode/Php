<?php
echo "Hello I am connecting sql with data base<br>";

//Ways to connect data base:
// mysqli extension
//PDO= php data object

$servername ="localhost";
$username="root";
$password="Hrhk@4321";
$database="dbAbuzar";

// Create connection
$conn= mysqli_connect($servername,$username,$password,$database);
// die if connection is not succesfull
if(!$conn){
    die("Sorry we failled to connect :".mysqli_connect_error());
}
else{
echo "connetion is successful<br>";
}

// creating a database 
$sql= "CREATE DATABASE dbAbuzar";

$result=mysqli_query($conn,$sql);
if($result){
    echo "database created successfully";
}
else{
    echo "Db not created because of this errorr---> ".mysqli_error($conn);
}

// echo var_dump($result);

// Creating a  table in the database;
$sql2= "INSERT INTO `myTable` (`Serial No.`, `Name`, `email`, `password`, `Phone`) VALUES ('4', 'Mohammad Danish', 'danish@gmail.com', 'dk@123', '797563247')";


$result2=mysqli_query($conn,$sql2);

// Check for the table creation success
if($result2){
    echo "table  created successfully";
}
else{
    echo "table not created because of this errorr---> ".mysqli_error($conn);
}

?>