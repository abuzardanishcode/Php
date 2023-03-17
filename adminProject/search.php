<?php
include 'component/connection.php';
include 'component/header.php';

session_start();
if(empty($_SESSION["name"])){
    header("location:logout.php");
}

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
if(isset($_POST['mysearch']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = "SELECT * from `details` WHERE `last_name` like '%$search%' or `first_name` like '%$search%'";
        $res=mysqli_query($conn,$stmt);
        
       if(!$res){
        echo "some issue occured";
       }
        /* $value=mysqli_fetch_all($res);
        foreach($value as $v){
            foreach($v as $val){
                echo $val." ";
            }
        } */
         




/* 
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
        </tr>'; */
        // ----------------------------------------------------------------------
        // include "component/selectAll.php";
        
        
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
          <td><a href='delete.php?Id={$row['Id']}'>DELETE </td>
          <td><a href='update.php?Id={$row['Id']}'>UPDATE </td>
          </tr>";
         }
        $output.= "</table>";
        
        echo $output;
        }else{
            echo " <td> No Data Fond</td>";
        } 











    }
    else
    {
        // $searchErr = "Please enter the information";
        header("location:welcome.php");
    }
    
}else if(!empty($_POST['CITY'])){
    $search = $_POST['CITY'];
    $stmt = "SELECT * from `details` WHERE `city` like '%$search%'";
    $res=mysqli_query($conn,$stmt);

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
          <td><a href='delete.php?Id={$row['Id']}'>DELETE </td>
          <td><a href='update.php?Id={$row['Id']}'>UPDATE </td>
          </tr>";
         }
        $output.= "</table>";
        
        echo $output;
        }else{
            echo " <td> No Data Fond</td>";
        } 

    
}


else{
}


  /*   if(isset($_POST['mysearch'])){
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = "SELECT * from `details` WHERE `last_name` like '%$search%' or `first_name` like '%$search%'";
        $res=mysqli_query($conn,$stmt);
        
       if(!$res){
        echo "some issue occured";
       }
} */
    // }
echo $searchErr;
 

?>