<?php
/* $a="hello bhai kya haal hai";
// echo $a[1];
$n = strlen($a);
echo $n;
$rev;
for($i=$n-1; $i>=0; $i--){
    // $rev=$rev+$a[$i];
    echo $a[$i];
} */

/* $a=[10,12,34,53,23,44,567,45,2,11,53];
$n=count($a);

$prime;
for($i=0; $i<$n; $i++){
    $arrNum=$a[$i]; //7
    for($j=2; $j<$arrNum; $j++){
        //2,3,4,5,6
        if($arrNum % $j == 0){
           echo $n;
        }else{
            echo $arrNum." ";
        }

    }

}
echo $prime;

 */
// program of prime
$a=11;

for($i=2; $i<$a; $i++){
    if($a%$i== 0){
        $c=false;
    }else{
        $c=true;
    }
}
if($c){
    echo " my no is prime";
}else{
    echo $a."not a prime no";
}




// program of prime using in an array
echo "<br>my program<br>";
$k=[1,2,3,4,11,12,7,18,13,6,19];
$m=count($k);
$value=false;
for($j=0; $j<$m; $j++){
   $n=$k[$j];
//   echo $n. " ";
  $value=false;
for($i=2; $i<$n; $i++){
    // echo "hi";
     if($n % $i == 0){
        // echo "bye";
          $value=true;
     }
}
if(!$value){
  echo $n." is prime no <br>";
}
}




// Write a function to find out longest palindrome in a given string?

$str="hello i am a no";











// code for palind

$n=1234;
$m=$n;
$temp=0;
// using while loop
/* while($n>0){
$rem=$n%10;
$temp=$temp*10+$rem;
$n=$n/10;
} */
// using for loop

for($i=$n; $i>0; $i=$i/10){
    $rem=$i%10;
    $temp=$temp*10+$rem;
}

if($temp==$m){
    echo "no is palindrome";
}else{
    echo "not a palindrom no";
}


// making a function for palindrom

$m=$n;
function checkPalindrom($n){
    $temp=0;
   /*  echo $n;
    echo $temp; */
   /*  for($i=$n; $i>0; $i=$i/10){
        $rem=$i%10;
        $temp=$temp*10+$rem;
    } */
    while($m>0){
        $rem=$m%10;
        // echo "danish". $n;
        // echo "hhh $rem";
        $temp=$temp*10+$rem;
        // echo $temp." ";
        $m=$m/10;
        echo $m;
    } 
    // echo "hello $temp";
    
    if($temp==$m){
        return "using function no is palindrome";
    }else{
        return "using function not  a palindrom no";
    }
}
$y=167;
echo checkPalindrom($y);
?>