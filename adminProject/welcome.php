<?php
include "component/header.php";
session_start();
if(empty($_SESSION["name"])){
  
header("location:logout.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dlt-btn{
           background-color:red;
        }
        .edit-btn{
            background-color:green;
        }
    </style>
</head>
<body>
    

 <h1 align='center'>Welcome to admin page</h1>



<?php



echo '<table border="1" width="100%" cellspacing="0" cellpadding="18px">
<tr>

<th>Id</th>
<th>First Name</th> 
<th>Last Name</th> 
<th>phone</th>
<th>Email</th>
<th>City</th>
<th>Message</th>
<th>Delete</th>
<th>Update</th>
</tr>';

include "component/selectAll.php";


/* foreach($value as $val){
    echo "<tr>";
    foreach($val as $v){
        echo  "<td> $v</td>";
    }
    echo  '<td><button class="dlt-btn" value=" $v["Id"]"> Delete</button> </td><td><button class="edit-btn"> Edit </button></td>
    ';
  echo  " <td><button class='edit' data-id='>Edit</button> </td>
     <td><button class='delete' data-id='{$row['Id']}'>Delete</button> </td>";
    echo "<tr>";
} */

while ($row=mysqli_fetch_assoc($result)) 
{
  $output.="<tr>
  <td>{$row['Id']}</td>
  <td>{$row['first_name']}</td>
  <td>{$row['last_name']}</td>
  <td>{$row['Mobile_no']}</td>
  <td>{$row['email']}</td>
  <td>{$row['city']}</td>
  <td>{$row['message']}</td>
  <td><a href='delete.php?Id={$row['Id']}'>DELETE </td>
  <td><a href='update.php?Id={$row['Id']}'>UPDATE </td>
  </tr>";
 }
$output.= "</table>";

echo $output;














?>
</body>
</html>