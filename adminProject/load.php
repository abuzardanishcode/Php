<?php
include 'component/connection.php';

$stmt = "SELECT * from `details`";
$res=mysqli_query($conn,$stmt);

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

if(mysqli_num_rows($res)>0){
while ($row=mysqli_fetch_assoc($res)) 
{
  $output.="<tr>
  <td>{$row['Id']}</td>
  <td>{$row['first_name']}</td>
  <td>{$row['last_name']}</td>
  <td>{$row['Mobile_no']}</td>
  <td>{$row['email']}</td>
  <td>{$row['city']}</td>
  <td>{$row['message']}</td>
  <td><button class='edit' data-id='{$row['Id']}'>Edit</button> </td>
  <td><button class='delete' data-id='{$row['Id']}'>Delete</button> </td>
  </tr>";
 }
$output.= "</table>";

echo $output;
}else{
    echo " <td> No Data Fond</td>";
} 



if(!$res){
echo "some issue occured".mysqli_error($conn);
}






















?>