<?php


function swap($k ,$m){
    $temp=$k;
    $k=$m;
    $m=$temp;
    
  /*   $temp=$arr[$j+1];
    $arr[$j+1]=$arr[$j];
    $arr[$j]= $temp; */
}
function printArray($arr,$size){
    for($i=0; $i<$size; $i++){
       echo $arr[$i]."  ";
    }

}

// echo $n;
function selectionSort($arr,$n){
for($i=0; $i<$n; $i++){
    for($j=$i+1; $j<$n; $j++){
        $index=$i;
        if($arr1[$j]<$arr1[$index]){
            $index=$j;
            if($index!=$i){
                return swap($arr[$index],$arr[i]);
            }
            // echo($arr1[$j])."";
        }
    }
}
}





$arr1=[19,5,3,7,2,7,2,110];
$m=count($arr1);
selectionSort($arr1,$m);
echo "my sorted array is : ";
printArray($arr1,$m)." ";

?>

<?php

$arr2=[13,32,45,243,11,2,44,2];







?>