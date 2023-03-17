<?php


include "comp/nav.php";
/* 
echo $option;
echo $name;
echo $email;
echo $password;
echo $cpassword;
echo $address; */
$emailerr=$nameerr=$passworderr=$adderr=$mobileerr=$optionerr="";
if(isset($_POST['submit'])){
    $flag=true;
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $address=$_POST["address"];
    $option=$_POST["option"];
    $file_name= $_FILES['image']['name'];
    $file_tmp= $_FILES['image']['tmp_name'];
    $destination="img".$file_name;
    move_uploaded_file($file_tmp, $destination);
    // echo $destination;
    $mobile_no=$_POST['mobile_no'];
    
    if(empty($name)){
        $nameerr="your name can not be empty";
        $flag=false;
    }else if(strlen($name)<4 || strlen($name)>20){
        $nameerr="please eneter more than 4 and less than 20";
        $flag=false;
    }
    if(empty($email)){
        $emailerr="your email can not be empty";
        $flag=false;
    }
    if(empty($password)){
        $passworderr="your password must have some values";
        $flag=false;
    }else if(strlen($password)<6){
        $passworderr="your password must have more than 6 digits";
        $flag=false;
    }else if($password!=$cpassword){
        $passworderr="your password could not match";
        $flag=false;
    }
    if(empty($address)){
        $adderr="address is required";
        $flag=false;
    }
    if(empty($option)){
        $optionerr="please choose an option";
        $flag=false;
    }
    if(empty($mobile_no)){
        $mobileerr="mobile no is required";
        $flag=false;
    }else if(strlen($mobile_no)<10){
        $mobileerr="mobile no sholud have more than 10";
        $flag=false;
    }
} 
    include "signup.php";

if($flag){
    include 'comp/dbConnect.php';
   /*  $server="localhost";
    $user_name="root";
    $user_pass="Hrhk@9090";
    $user_Db="EVM";


// try {
  $conn=mysqli_connect($server,$user_name,$user_pass,$user_Db);
  if(!$conn){
  throw new Exception("Error Processing Request");
} */
    // echo "successfully Connected";
  
    
/* } catch (Exception $e ) {
    return $e->getmsg();
    
} */
echo "hi";
    $insert="INSERT INTO `Users`(`Name`,`Email`,`Password`, `Mobile_no`, `Address`, `State`,`img`) VALUES ('$name','$email','$password','$mobile_no','$address','$option','$file_name')";
    $query=mysqli_query($conn,$insert);
    if($query){
        echo "sucessfully created your account ";
    }else{
        echo "bye";
        echo mysqli_error($conn);
    }
}else{
    echo "some erro occured";
}