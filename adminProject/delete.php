<?php

$id=$_GET['Id'];

include "component/connection.php";

$sql="DELETE  FROM `details` where ID='$id'";

$res=mysqli_query($conn,$sql);

if($res){
    header("location:welcome.php");
}else{
    echo "having some issue".mysqli_error($conn);
}






















?>