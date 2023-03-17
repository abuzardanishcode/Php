<?php
$a=[10,20,30,40,50];
// $arr=array_reduce($a,'myFunc','start');
$arr=array_reduce($a,'myFunc',1);

function myfunc($n,$m){
    // return $n." ".$m;
    return $n+$m;

}
print_r($arr);