<?php
/* Functions using in read operations */
$file=fopen("file2.php","r");

echo fgets($file); //first line ko btaata hai
echo ftell($file); //cursor ki position ko btata hai
echo fgets($file);
echo ftell($file);
// echo fread($file,filesize("file2.php"));
//  echo fread($file,"100"); //sirf file ko read kar sakte hain


fseek($file,15); //cursor ki position ko change krta hai
echo "<br>". ftell($file);
echo fgets($file) ."<br>";

echo "<br>". fpassthru($file); //last cursor k baad jitna bhi data hoga sab show kr dega

echo rewind($file); //ye cursor ki position ko starting me bhej deta hai
echo fgets($file);

// jab baari baari line ko read krni ho to 
/* echo '<ol>';
while(!feof($file)){   //file end of file
    $line=fgets($file);
    echo"<li> $line .</li>";
}
echo '</ol>'; */


rewind($file);
echo fgetc($file);
echo fgetc($file); //cursor ka first character deta hai;

/* ye file ki har line ko ek array me convert kkar deta hai  */
echo "<pre>";
print_r(file("file2.php"));
echo "</pre>";




/*------------------------- Functions using in read operations ---------------------------------------*/
$file=fopen("file2.php","r+");
fwrite($file,"this is new line of mine");
// ye owerrite karta hai
$file=fopen("file2.php","w+");
fwrite($file,"this is new line of mine");
// baakiyo ko delete karke ye laga deta hai
$file=fopen("file2.php","a+");//ye last me add krdeta hai
fputs($file,"/nthis is new line of mine");
if(is_file($file)){
   ftruncate($file,50);
}else{
    echo "not writeable";
}
fclose($file);


?>