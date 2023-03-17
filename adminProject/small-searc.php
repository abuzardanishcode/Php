<?php
include 'component/connection.php';


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


$searchErr = '';
$employee_details='';

        $city1=$_POST["mycity"];
        $search1 = $_POST['search'];
      $city= trim($city1);
    //   echo $city;
      $search= trim($search1);
$res="";
 if(!empty($city) && !empty($search)){
    $stmt = "SELECT * from `details` WHERE (`last_name` like '%$search%' OR `first_name` like '%$search%') AND `city` like '%$city%' ";

    $res=mysqli_query($conn,$stmt);
    
 } 

 else if(!empty($city)){
    $stmt = "SELECT * from `details` WHERE `city` like '%$city%' ";
            $res=mysqli_query($conn,$stmt);      
        
 }


else if(empty($city) && empty($search)){
    $stmt = "SELECT * from `details`";
            $res=mysqli_query($conn,$stmt);      
      
}else if(!empty($search)){
    $stmt = "SELECT * from `details` WHERE  `first_name` like '%$search%' OR `last_name` like '%$search%'";
    $res=mysqli_query($conn,$stmt);
}

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