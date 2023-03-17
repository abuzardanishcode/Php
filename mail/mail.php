<?php


$to="danish.aman@unthinkable.co";
$subject ="Mail From PHP";
$message="Hello Danish This is testing email send by PHP";
$from="202219us026@wilp.bits-pilani.ac.in";
$header ="From : $from";

if(mail($to ,$subject,$message,$header)){
    echo "email sent";
}else{

    echo "Email failed"; 
}



?>