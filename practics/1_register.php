<?php

require_once 'connecting.php';

$nameErr = $emailErr = $myPassErr = $cPassErr = "";
$name = $email  =  "";


if($_SERVER('REQUEST_METHOD')=='POST'){
     
    // user name validation
    if(empty(trim($_POST["Email"]))){
        $emailErr="Email Can not be blank";
    }
    else{
        $sql= "SELECT * from signupTable where Email=?";
        $stmt=mysqli_prepare($link,$sql);

        if($stmt){
            mysqli_stmt_bind_param($stmt,"s",$userEmail);

            $userEmail=trim($_POST['Email']);

            // executing this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_row($stmt)==1){


                    $userEmailErr="User Email Is already taken";
                }
               else{
                $userEmail=trim($_POST['Email']);
               }
            }
            else{
                echo "something went wrong";
            }
        }
    }
    mysqli_stmt_close();

    // Password

    if(empty(trim($_POST['password']))){
        $cPassErr="Password Can not be blank";
    }
    else{
        $password= trim($_POST['password']);
    }

    // For confirming password

    if(trim($_POST['password'])!=trim($_POST['cPassword']))

    $PassErr="Password Can not be blank";
}








?>