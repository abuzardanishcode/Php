<?php
echo "Welcome to my cookies world ";


$name=$_POST["name"];
$hobbie=$_POST["hobbie"];
$favPlayer=$_POST["favPlayer"];
// pahchaane k liye use karte hain cookies ko 
// browser me store krte hain normal cheejein store krte hain

// sytanx to set cookies
// setcookie("key","type","time","location")
setcookie("category","$name and $hobbie and $favPlayer", time()+86400,"/");
echo "my cookies is set";
?>
