<?php


$source=file_get_contents('roman.php');

$file=fopen("para.php","r");
echo fgets($file);
echo ftell($file); 

$pos=0;
$braceCount=0;
$line=0;
echo '</ol>';
echo "Hi this is your line". $line;
while( preg_match('~\{|\}~S', $source, $out, PREG_OFFSET_CAPTURE, $pos) ){
if($out[0][0] === '{'){
  $braceCount++;
  if( $braceCount === 1 )
  $startPos=$out[0][1];
}
elseif( $out[0][0] === '}' ){
  $braceCount--;
  if( $braceCount === 0 ){
    echo "everthing is seems to good";
  } 
  elseif( $braceCount < 0 ){
    echo 'closing brackets jyaada hain '.($out[0][1]+1).'<br>';
    
  }
}
$pos = $out[0][1]+1;
}
if( $braceCount > 0 ){ echo 'Closing brace is missing .'.$pos;
 }else{
    echo "hi";
} 

// $myfile=fopen("roman.php","a+");
$myfile="roman.php";
// echo filetype($myfile);
// echo readfile($myfile);
echo $pos;
$newfile=fopen("roman.php","r");
// echo fgets($newfile); 
fseek($newfile,$pos);
echo "hi danish";
echo "<br>".fgets($newfile)."<br>"; 
echo ftell($newfile);
echo "<br>". __LINE__; 
if(is_file($myfile)){
// fseek($myfile,$pos);
echo "this is abuzar";
echo "<br>hi". ftells($myfile);
}else{
    echo "no this is not a file";
}

?>