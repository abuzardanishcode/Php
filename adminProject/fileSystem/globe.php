<?php
// globe ka use hum file ko search krne ke liye krte hain
// glob(pattern,flags)
/* echo "<pre>";
print_r(glob("image/*"));
echo "<pre>"; */
/* 
echo "<pre>";
print_r(glob("fi*"));
echo "<pre>";
 */

/*  echo "<pre>";
 print_r(glob("*e.*"));
 echo "<pre>";
 */

/*  echo "<pre>";
 print_r(glob("ch*.php"));
 echo "<pre>";
 */

/*  echo "<pre>";
 print_r(glob("[afc]*"));
 echo "<pre>"; */

/* $ary= glob("*");

foreach($ary as $filename){
    echo "{$filename}  size :". filesize($filename) ."<br>";
}
 */

/* echo "<pre>";
print_r(glob("*",GLOB_MARK));
echo "</pre>"; */

echo "<pre>";
print_r(glob("{css/*2.css,*.php}",GLOB_BRACE));
echo "</pre>";








?>