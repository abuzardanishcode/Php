<?php
$sever="localhost";
$user="root";
$password="Hrhk@9090";
$database="login_page";

$password1=$_post["myPass"];
$email=$_post["email"];

$connect= mysqli_connect($sever,$user,$password,$database);

if(!$connect){
   echo("unable to connect ".mysqli_connect_error());
}
else{
echo "Successfully Connected";
}
/* ofujkewhq;vodhjilfec;hdinvm,ds[p'v,;aw'fi;vm,eQHPINKLDMBQT'NO;EABL,F'FOE;W,LDJIXP    SAcom;l] */

function strEncryption($str){

    $key ="danishkhan";
    $chiper="AES-128-CTR";

    $ivLength= openssl_cipher_iv_length($chiper);
    // echo $ivLength;

   $iv=openssl_random_pseudo_bytes(16);
// $iv=1234567891234567;
    $optioons=0;
    $encrypt = openssl_encrypt($str,$chiper,$key,$optioons,$iv);
     
    return $encrypt;
}

/*  "My Str encrypted function is ";
echo strEncryption("My Str encrypted function is"); */
/* FHIOEWKNWVQPW'OV;LK,DQLWKNGs 'pOQ;FSVK;LLQow;fwnvkjfd    jijsadjqjdn;    ijdd */

$passwordEN = strEncryption($password1);
$emailEN =strEncryption($email);
 
echo $emailEN;

$sql="INSERT INTO `encrypt` (`Serial No.`, `Password`, `email`) VALUES (NULL, '$passwordEN', '$emailEN');";
$result=mysqli_query($connect,$sql);

if($result){
    echo "Successfully Inserted";
}

// echo $result;




?>