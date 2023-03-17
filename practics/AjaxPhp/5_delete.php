<?php
$student_id= $_POST["id"];
echo "my id is =".$student_id;
var_dump ($_POST["id"]);
$conn=mysqli_connect('localhost','root','Hrhk@9090','ajaxdb') or die("some issue occured".mysqli_connect_error());

$sql="DELETE  from `student` where Id = $student_id ";

if(mysqli_query($conn,$sql)){

    echo 1;
}else{
    echo 0;
}





?>