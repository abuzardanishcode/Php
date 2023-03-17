<?php
$server="localhost";
$user_name="root";
$user_pass="Hrhk@9090";
$user_Db="EVM";


try {
  $conn=mysqli_connect($server,$user_name,$user_pass,$user_Db);
  if(!$conn){
  throw new Exception("Error Processing Request");
}
    // echo "successfully Connected";
  
    
} catch (Exception $e ) {
    return $e->getmsg();
    
}