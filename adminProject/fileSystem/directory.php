<?php

// getcwd;
/* echo getcwd();

chdir("image");
echo getcwd();
 */

 $dir= "."; //current directory
/*  echo "<pre>";
print_r(scandir($dir));  //ascending order
echo "<pre>"; */

echo "<pre>";
print_r(scandir($dir,1));  //descending order
echo "<pre>";



?>