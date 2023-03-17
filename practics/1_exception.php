<?php
//create function with an exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(2);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}

?>

<?php
 

 function division($n){
    if($n>1){
        throw new Exception(" No must be 1 or below one");
        
    }
    return true;

 }
 try{
    division(1);
    echo "Your no is surely one or less than one";
 }
 catch (Exception $e){
   echo "message". $e->getMessage();
 }
 finally{
    echo "<br>My message function is completed";
 }





?>