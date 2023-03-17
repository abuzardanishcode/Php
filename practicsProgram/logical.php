<?php
function w3rfunction($value,$key)
{
echo "$key : $value"."\n";
}
$data='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';

$myval= json_decode($data,true);

array_walk_recursive($myval,w3rfunction);
/* foreach($myval as $key=>$value){
    echo $key .":".$value."<br>";
} */

$arr=[10,13,23,23,11];
$value=[13,45];
array_splice($arr,2,0,$value);
// print_r($newArr);
echo "<pre>";
print_r($arr);
echo "<pre>";

foreach($arr as $var){
    echo $var;
}



$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"4")
;
// sorting by value and key in ascending-----------
/* sort($a);
print_r($a); */
ksort($a);
print_r($a);
// sorting by value in dscending-------------------
/* arsort($a);
print_r($a); */
krsort($a);
print_r($a);

/* Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. */
$temp=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$mine=0;
foreach($temp as $value){
  $mine=$mine+$value;
}

echo $mine/count($temp);




rsort($temp);
$newArr=array_unique($temp);
print_r($newArr);
$myNew=0;
$count=0;
foreach($newArr as $myValue){
    if($count<5){
        $myNew=$myNew+$myValue;
    }
    $count++;
}
/* for($i=0; $i<5; $i++){
  $myNew=$myNew+$newArr[$i];
} */
echo"average of minimum value ". $myNew/5;



?>