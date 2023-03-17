<?php
$str ="Mohammad abuzar";
$key ="danishkhan";
$chiper="AES-128-CTR";

$ivLength= openssl_cipher_iv_length($chiper);
echo $ivLength;

$iv=openssl_random_pseudo_bytes(16);
// $iv=1234567891234567;
// $optioons=0;

$encrypt = openssl_encrypt($str,$chiper,$key,$optioons,$iv);
$decrypt = openssl_decrypt($str,$chiper,$key,$optioons,$iv);

echo "Mohammad Abuzar encrypted code :".$encrypt."<br>And Decrypted code is :".$decrypt;

?>


<?php

/* function strEncryption($str){

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

echo "My Str encrypted function is ";
echo strEncryption("My Str encrypted function is");
 */
?>