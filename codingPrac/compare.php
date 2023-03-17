<?php
$str="hi daanish";
$str1="HI Danish";
echo strcasecmp($str1,$str);
// 0 for equal 
// 1 for str1 is greator else $str less.b 

$first_array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'); 
$second_array = array('c2', 'c4');
// print_r($second_array);
// print_r(array_flip($second_array));
$result=array_diff_key($first_array,array_flip($second_array));
// print_r($result);

/* 
$a=["hello","danish","abuzar","sumaiya"];

$newArr=array_rand($a,2) ;
print_r($newArr);
// echo $a[$newArr];
echo $a[$newArr[0]];
echo $a[$newArr[1]]; */
$a=["hello","danish","abuzar","sumaiya"];

shuffle($a);
print_r($a);


// Array fill Array fill keys 
$a=["a","b","c","d","e"];
$new=array_fill_keys($a,"danish"); 
// $new=array_fill(0,3,"danish"); new array create krte haui
print_r($new);





?>