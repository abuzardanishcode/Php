<?php

$id=$_POST['id'];

include "component/connection.php";

$sql="DELETE  FROM `details` where ID='$id'";

$res=mysqli_query($conn,$sql);

if($res){
    echo 1;
}else{
 echo 0;  
}


?>