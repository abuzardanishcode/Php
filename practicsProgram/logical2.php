<?php

// Write a PHP program to merge (by index) the following two arrays
function merge_by_Index($x,$y){
    $temp=[];
    $temp[]=$y;
    if(is_scalar($x)){
        $temp[]=$x;

    }else{
        foreach($x as $a){
            $temp[]=$a;
        }
    }
   return $temp;
}

$array1 = array(a => array(77, 87), b => array(23, 45));
$array2 = array("w3resource", "com");

echo "<pre>";
print_r(array_map("merge_by_Index",$array1,$array2));
echo "<pre>";
// rite a PHP function to change the following array's all values to upper or lower case
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$str;
foreach($Color as $key=>$a){
   $str= $key.":".$a;
}


// Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4

$n=range(200,250,4);
print_r($n);
echo implode(",",$n);


// Write a PHP script to get the shortest/longest string length from an array.
$arr=["abcd","abc","de","hjjj","g","wer"];

/* sort($arr);
print_r($arr);
*/

$newArr=array_map('strlen',$arr);
print_r($newArr) ;
echo "minimum length is ". min($newArr)."<br>";
echo "maximum length is ". max($newArr);

// Write a PHP script to generate unique random numbers within a range.

$arr=range(10,20);
print_r($arr);
shuffle($arr);
print_r($arr);
array_unique($arr);
print_r($arr);

// Write a PHP script to get the largest key in an array

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
"United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;

$a=(array_keys($ceu));
print_r($a);
echo max($a);
?>

?>