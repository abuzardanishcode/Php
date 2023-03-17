<?php

$conn=mysqli_connect("localhost","root","Hrhk@9090","ajaxdb") or die("connection failed");

$sql="select * from student";

$result=mysqli_query($conn,$sql) or die("sql query failed");

$output =mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($output);
/* echo "<br>";
echo "<pre>";
print_r($output);
echo "<pre>";
 */


?>