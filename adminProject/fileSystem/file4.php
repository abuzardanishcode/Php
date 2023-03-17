<?php

/* if(is_file("file2.php")){
    echo "yes it is file";
}else{
    echo "no it is not file";
} */

if(is_dir("file2.php")){
    echo "yes it is folder";
}else{
    echo "no it is not folder";
}

if(is_writeable("file2.php")){
    echo "yes it is writeable";
}else{
    echo "no it is not writeable";
}





?>