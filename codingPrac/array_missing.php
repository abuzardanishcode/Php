<?php 
$a=[10,11,15,18];

// $arr=range(10,18);
print_r($a);

/* for($i=0;$i<count($arr);$i++){
    echo $arr[$i]." "."<br>";
}
// if()
for($j=0; $j<count($a); $j++){
    $n= $a[$j];
    echo $n;
    foreach($arr as $val){
        if($n==$a[$val]){
             $n;
        }else{
            echo "danish";
        }
    }
} */
function missing_number($num_list)
{
 // construct a new array
$new_arr = range($num_list[0],max($num_list));                                                    
// use array_diff to find the missing elements 
return array_diff($new_arr, $num_list);

}
print_r(missing_number($a));
// echo $n;