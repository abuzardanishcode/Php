<?php
/* 
opendir
readdir
closedir */

$dir ="."; //current directory
// $dir =".."; //change current directory

if(is_dir($dir)){
    if($d = opendir($dir)){
        while($file = readdir($d)){
          echo "filename : ". $file ."<br>";   
        }
    }else{
        echo "dir open nahi ho rhi";
    }
}else{
    echo "dir is not present";
}
closedir($dir);








?>