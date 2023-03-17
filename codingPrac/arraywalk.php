<?php
$b=["1"=>"ramesh","2"=>"muskesh"];

$a=[ "bill"=>10,
"danish"=>20,
"Abuzar"=>30,
$b];




array_walk($a,"funct");
array_walk_recursive($a,"funct");
array_walk($a,"funct","is a key of");

// function funct($v,$k,$par)
function funct($v,$k){
   echo "$k & $v"."<br>";
}







?>