<?php
$time_start=microtime(true);
$str=file_get_contents('text.php');
echo $time_start;
$lower=strtolower($str);
// echo $lower;

echo 
$arr=str_word_count($lower,1);
echo( str_word_count($lower));

// $arr=["hello","danish","ahmad","sbuzar","om"];
$vowel=["a","e","i","o","u"];
$count=0;
foreach($arr as $value){
    $a= $value[0];
    foreach($vowel as $v){
        if($a == $v){
            $count++;
        }
    }
}
echo "No of word found in this para ". $count;
$time_end=microtime(true);
$total_time=$time_end-$time_start;
echo"total itna time laga". $total_time;




function searchVowel($arr1,$arr2){
    $blank=[];
    $mount= 0;
    foreach($arr1 as $value){
        // $a= $value[0];
        foreach($arr2 as $v){
            if($value[0] == $v){
                $blank[$value]=$value[0];
                 $mount++;
            }
        }
    }
    return print_r(array_keys($blank));

}
echo "total no of count";
print(searchVowel($arr,$vowel));





?>