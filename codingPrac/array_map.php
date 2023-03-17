<?php
$a=[2,3,4,6,3,5];
$b=["rashid","santosh","ashad","ramesh","ahmad","danish"];
// $new=array_map("myfunc",$a,$b);
$new=array_map("myfunc",$b);
/* function myfunc($v,$c){
   return [$v => $c];
 } */
 function myfunc($v){
    return strtoupper($v);
  }
print_r($new);

?>