<?php

$food=["danish","abuzar","zuned","ahmad"];
$a=[ "bill"=>10,
"danish"=>20,
"Abuzar"=>30];
// asort($a);
ksort($a);
krsort($a);
$nat=["img.12","Img.23","Img.13","img.1"];
natsort($nat);
natcasesort($nat);

print_r($nat);

print_r($a);
sort($food);

print_r($food);




?>