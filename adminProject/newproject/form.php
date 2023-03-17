<?php
include('conn.php');
session_start();


   
    if(!empty($_SESSION['name'])){
        $name=$_SESSION['name'];
        $content=$_POST['mycontent'];
    }else{
        header("location:unauthorized.php");
    }
    $query="INSERT INTO `post` (`Author name`, `content`) VALUES ('$name', '$content')";
    $result=mysqli_query($conn,$query);
    if(!$result){
        echo "having issue with system".mysqli_error($conn);
    }

?>
