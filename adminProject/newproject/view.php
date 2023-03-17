<?php 
    include('conn.php');
    session_start();
    $name=$_SESSION['name'];
    $query="SELECT * from `post` where `Author name` = '$name'";
    $result=mysqli_query($conn,$query);
    if(!$result){
        echo mysqli_error($conn);
    }

 while ($row = mysqli_fetch_assoc($result)) {
    
    $output .= "<p>{$row['content']}</p><hr>";  
 }
   
echo $output;
?>