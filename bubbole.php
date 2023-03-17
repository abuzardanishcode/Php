<?php
// $str1=file_get_contents('text.php');
// $lower= strtolower($str1) ;
// $arr=str_word_count($lower,1);
// print_r($newArr);
// $arr1=["danihs",5,"ramesh",2,4,"ramesh",5,34,"danihs",5];
// print_r($arr);
// echo $n."<br>";
$arr=[1,33,2,34,2,4,45,6];
$n=count($arr);

for($i=0; $i<$n; $i++){
    // echo $arr[$i]." <br>";
    // $count=0;
    
    for($j=0; $j<$n-1-$i; $j++){
        if($arr[$j] > $arr[$j+1]){
            // $count++;
        //   $arr[$value] = $arr[$j]." ".$count++."<br>";
            /* $a=$arr[$j];
            $b=$arr[$j+1]; */
            /* $arr[$j]=$arr[$j]+$arr[$j+1];
            $arr[$j]=$arr[$j]-$arr[$j+1];
            $arr[$j+1]=$arr[$j]-$arr[$j+1]; */
            /* $b=$a-$b;
            $a=$a-$b;
             */
            $temp=$arr[$j+1];
            $arr[$j+1]=$arr[$j];
            $arr[$j]= $temp;
        }
    }
} 
print_r($arr);







?>

<?php











?>