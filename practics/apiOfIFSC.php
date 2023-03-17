<?php

if(isset($_POST['submit'])){
$name=$_POST['value'];
$json=file_get_contents('https://ifsc.razorpay.com/'.$name);
$arr=json_decode($json);
// echo $name;
/* echo $json;*/
// var_dump($arr); 
if($arr->BRANCH){
echo "Branch : ".$arr->BRANCH ."<br>";
echo "DISTRICT : ".$arr->DISTRICT ."<br>";
echo "CITY : ".$arr->CITY ."<br>";
echo "ADDRESS : ".$arr->ADDRESS ."<br>";
echo "STATE : ".$arr->STATE ."<br>";
}else{
    echo "invalid ifsc code";
}

}

?>
<form action="" method="POST">
<input type="text" name="value" id="" placeholder="Enter Your IFSC code">
<input type="submit" name="submit" value="Check">
</form>