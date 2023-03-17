<?php
include "connection.php";
$tablename=details;
$sql="SELECT * FROM $tablename";
$result=mysqli_query($conn,$sql);

// $value=mysqli_fetch_all($result);
// $value=mysqli_fetch_assoc($result);





?>