<?php

echo substr(decoct(fileperms("file2.php")),2);

chmod("file2.php",0644);

// echo  __LINE__;

// file_put_contents(filename,data,mode,context)

/* echo file_put_contents("file2.php","this new text using in my file"); */
/* echo file_put_contents("file2.php","this new text using in my file",FILE_APPEND); */
/* Open karne k liye */
echo file_put_contents("file2.php","\n this new text using in my file",FILE_APPEND | LOCK_EX);


/* Read karne k liye file me ye use krte hain */
// file_get_contents("filename",T/F,extradata,startpoint,kitnepoint)
echo file_get_contents("file2.php",FALSE,NULL,40,50);
?>