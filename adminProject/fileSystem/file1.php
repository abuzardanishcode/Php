<?php

$file="file2.php";

/* if(!file_exists("newfoder")){
     mkdir("newfoder");
     echo "folder created";
}else{
    echo "folder does not exist";
} */
if(file_exists($file)){
    copy($file,"newfile.txt"); 
    // echo readfile("newfile.txt");
    unlink("newfile.txt");//delete kr deta hai
    echo readfile("file2.php");

    // rename("file1.php","myfile.php");
}else{
    echo "file does not exist";
}

// file size and type

echo filesize($file);//size kitni bit ki hai
echo filetype($file); //type kya hai file ki
echo realpath($file);
$path =realpath($file);
echo "<pre>";
print_r(pathinfo($file));
echo "<pre>";
echo "<pre>";
print_r(pathinfo($path));
echo "<pre>";
/* echo "<pre>";
print_r(pathinfo($path,PATHINFO_BASENAME));
echo "<pre>"; */
echo basename($path,".php");
?>