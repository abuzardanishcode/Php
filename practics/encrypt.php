<?php
$str="HelloMohammadAbuzar";


$key="Abuzar8068864";
$chiper="AES-128-CTR";
$ivLen=openssl_cipher_iv_length($chiper);
$iv=openssl_random_pseudo_bytes(16);
$options=0;




echo openssl_decrypt($str,$chiper,$key,$options,$iv);

?>