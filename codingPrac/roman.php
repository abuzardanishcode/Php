<?php $arr=[      'I'  => 1,
            'IV' => 4,
            'V'  => 5,
            'IX' => 9,
            'X'  => 10,
            'XL' => 40,
            'L'  => 50,
            'XC' => 90,
            'C'  => 100,
            'CD' => 400,
            'D'  => 500,
            'CM' => 900,
            'M'  => 1000];

            $str="XIX";
            $num=0;
/* if($str=="IV" || $str=="ix"){
    $num += $arr[$str];
}else{ */
for($i=0; $i<strlen($str); $i++){

       $lett = $str[$i];
       $lett1=$str[$i-1];
       if($lett=="V" || $lett=="X" && $lett1=="I"){
        $my=$arr[$lett]-$arr[$lett1]*2;
        $num+=$my;
    }else{
    //    if($lett==$key){
    //       $num+=$value;
    //    }
    $num += $arr[$lett];
    }
    /* if(($i-1)>0)
    {
        $letb=$str[$i-1];
    } */
    }abuzar}}hi i am
// }
echo $num;

?>