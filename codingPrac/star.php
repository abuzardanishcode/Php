<?php

/* for($i=1; $i<=5; $i++){
    for($j=1; $j<=5; $j++){
       if($j>=6-$i){
               echo "*";
       }else{
             echo "h";
       }
       echo "*";
    }
    echo "<br>";
}


for($i=1; $i<=5; $i++){
    for($j=1; $j<=5; $j++){
       if($j>=$i){
               echo "*";
       }else{
             echo "h";
       }
    }
    echo "<br>";
}

for($i=1; $i<=5; $i++){
    for($j=1; $j<=5; $j++){
       if($j<=6-$i){
               echo "*";
       }else{
             echo "\t";
       }
    }
    echo "<br>";
}


echo "this is another program---------<br>";
for($i=1; $i<=5; $i++){
    for($j=1; $j<=9; $j++){
       if($j>=6-$i && $j<=4+$i){
               echo "*";
       }else{
             echo "h";
       }
    }
    echo "<br>";
}

echo "this is new programm +++++------<br>";
for($i=1; $i<=5; $i++){
     $k=1; //skip karke print karega
    for($j=1; $j<=9; $j++){
       if($j>=6-$i && $j<=4+$i && $k) {
               echo "*";
               $k=0;
       }else{
             echo "h";
             $k=1;
       }
    }
    echo "<br>";
}


echo "this is new programm is mine+++++------<br>";
for($i=1; $i<=5; $i++){
    //  $k=1; //skip karke print karega
    for($j=1; $j<=9; $j++){
       if($j<=6-$i || $j>=$i+4) {
               echo "*";
               
       }else{
             echo "h";
            
       }
    }
    echo "<br>";
}

echo "this is new programm is mine+++++------<br>";
for($i=1; $i<=5; $i++){
    //  $k=1; //skip karke print karega
    for($j=1; $j<=9; $j++){
       {
        if($j>=6-$i && $j<=4+$i){
               echo $i;
        }else{
            echo "h";
        }
       }
    }
    echo "<br>";
}


echo "this is new programm is mine+++++------<br>";
for($i=1; $i<=5; $i++){
     $k=1; //skip karke print karega
    for($j=1; $j<=9; $j++){
       {
        if($j>=6-$i && $j<=4+$i){
            echo $k;
            if ($j<=4){
                $k++;
            }else{
                $k--;
            }
        }else{
            echo "h";
        }
       }
    }
    echo "<br>";
}






echo "this is for ABCDA<br>";
for($i=1; $i<=5; $i++){
     $k='A'; //skip karke print karega
    for($j=1; $j<=9; $j++){
       {
        if($j>=6-$i && $j<=4+$i){
            echo $k;
            if ($j<=4){
                $k++;
            }else{
                $k--;
            }
        }else{
            echo "h";
        }
       }
    }
    echo "<br>";
}



echo "this is new programm for ABCDA-----<br>";
for($i=1; $i<=4; $i++){
     $k='A'; //skip karke print karega
    for($j=1; $j<=7; $j++){
       if($j<=5-$i || $j>=$i+3) {
               echo $k;
           if($j<4){   $k++;}else{$k--;} 
       }else{
             echo "h";
            if($j==4){
                $k--;
            }
       }
    }
    echo "<br>";
}

 */

/* $source='for($i=1; $i<=4; $i++){
    $k="A"; //skip karke print karega
   for($j=1; $j<=7; $j++){
      if($j<=5-$i || $j>=$i+3) {
              echo $k;
          if($j<4){   $k++;}else{$k--;} 
      }else{
            echo "h";
           if($j==4){
               $k--;
           }
      }
   }
   echo "<br>";
}
'; */
/* $str1=file_get_contents('text.php');
echo $str1; */
$source=file_get_contents('roman.php');
// echo $source;
$file=fopen("para.php","r");
echo fgets($file);
echo ftell($file); 
// echo "hi". implode(",",$source);
$pos=0;
$braceCount=0;
$line=0;
$mos;
/* if(strpos($source,'\n')){
    $line++;
    // $mos = $in[0][1]+1;
}else{
    echo "no line break in your code";
} */
// if(is_file($file)){
// while(!feof($source)){   //file end of file
   echo fgets($file);
fclose($file); 
// }
/* }else{
    echo "Sorry bro this is not a file";
} */
echo '</ol>';
echo "Hi this is your line". $line;
while( preg_match('~\{|\}~S', $source, $out, PREG_OFFSET_CAPTURE, $pos) ){
    /* echo "<pre>";
    print_r($out);
    echo "<pre>"; */
if($out[0][0] === '{'){
  $braceCount++;
  if( $braceCount === 1 )
  $startPos=$out[0][1];
}
elseif( $out[0][0] === '}' ){
  $braceCount--;
  if( $braceCount === 0 ){
    //echo 'Up to that position:'.$out[0][1].' every thing seems to be ok?<br>';
    // echo substr($source,$startPos,($out[0][1]+1-$startPos)).'<br>';
    echo "everthing is seems to good";
  } 
  elseif( $braceCount < 0 ){
    echo 'closing brackets jyaada hain '.($out[0][1]+1).'<br>';
    exit;
  }
}
$pos = $out[0][1]+1;
}
if( $braceCount > 0 ){ echo 'Closing brace is missing .'.$pos;
}else{
    echo "hi";
} 

fseek($source,$pos);
echo "<br>hi". ftell($source);
?>