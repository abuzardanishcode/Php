<?php

$time_start=microtime(true);
echo "<b>$time_start secounds</b>";
/* echo date("h:i:sa");
echo 'Now: '. time(); */
$str1=file_get_contents('text.php');
// $str2= "Hello hello hello is my danish danish MJDame is Danish";
class myclass{
// echo $myText;


function count($str){
      $lower= strtolower($str) ;
   
    //   $newArr= explode(" ",$newstr);
    $newArr=str_word_count($lower,1);
    //   print_r($newArr);
      $arr=[];
      foreach($newArr as $value){
     $arr[$value]=substr_count($lower,$value);
}
    print_r($arr);
}
}

$obj=new myclass;
$obj->count($str1);
// count(print_r($arr));
$time_end=microtime(true);
$time = $time_end - $time_start;

echo "<b>Total time taken  $time seconds\n";



?>
<?php
// echo date("h:i:sa")."<br>";
/* echo '<b>Now: </b>'. time();
for($i = 0; $i < count($newArr); $i++) {  
    $count = 1;  
    for($j = $i+1; $j < count($newArr); $j++) {  
        if($newArr[$i] == $newArr[$j]) {  
            $count++;   
            $newArr[$j] = "0"; 
        }  
    } 

if($count > 1 && $newArr[$i]!="0"){ 
    // print($arr);
    $arr= $newArr[$i];
    echo($arr);  
    print(" "); 
    print($count);
   
   
}   
} 
echo date("h:i:sa");
echo '<b>Now:<b> '. time(); */
?>