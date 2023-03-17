<?php
$serial=$_POST['serial'];

if($_SERVER["request_method"]=="post"){
if(empty($_post["name"])){
    $user1Err="Name is required";
}
else{
$user1 =$_POST['name'];
}

if(empty($_POST["phone"])){
    $phoneErr="Phone is required";
}
else{
$phone=$_POST["phone"];
}
$password= $_POST["password"];
$email=$_POST["email"];
// $x="hello";

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
// if($_SERVER['REQUEST_METHOD']=='POST'){



$sql2= "INSERT INTO `myTable` (`Serial No.`, `Name`, `email`, `password`, `Phone`) VALUES ('$serial', '$user1', '$email', '$password', '$phone')";

$result2=mysqli_query($conn,$sql2);

if($result2){
    echo "table  created successfully";
}
else{
    echo "table not created because of this errorr---> ".mysqli_error($conn);
}

$sql="SELECT * FROM `myTable`";
$result1=mysqli_query($conn, $sql);

// find the number of records return

$num=mysqli_num_rows($result1);
echo $num; 


}


?>