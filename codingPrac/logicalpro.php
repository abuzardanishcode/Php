<?php
// Write a PHP program to check whether a given positive integer is a power of two.
$num=[3,5,8,4,3,1];
foreach($num as $value){
$blak=[];
if($value%2==0){
    $blak[$value]=$value;
}else{
    echo "no values";
}
}
print_r($blak);

function is_Power_of_two($n)
{
   if(($n & ($n - 1)) == 0)
    {
		return "$n is power of 2";
    }
   else
    {
		return "$n is not power of 2";
    }
}
print_r(is_Power_of_two(4)."\n");
print_r(is_Power_of_two(36)."\n");
print_r(is_Power_of_two(16)."\n");
?>

?>