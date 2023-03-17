<?php
//  try{
     $Email =$_POST["Email"];
     $password=$_POST["password"];

 $server="localhost";
 $user="root";
 $password="Hrhk@4321";
 $database="dbAbuzar";

 $conn=mysqli_connect($server,$user,$password,$databse);

if(!$conn){
    die("Sorry could not connect".mysqli_connect_error());
}
else{
    echo "Congratulation Successfully Connected to Database<br>";
}


// $sql="INSERT INTO `loginDetails` (`E mail`, `Password`) VALUES ('$Email', '$password')";
// // -- VALUES($Email,$password)";
// echo $password;
$sql="INSERT INTO `dbAbuzar`.`loginDetails` (`E mail`, `Password`) VALUES ('$Email', '$password')";
$table=mysqli_query($conn,$sql);
echo $sql;

if($table){
    echo "Values inserted Successfully in the table";
}
else{
    echo"Can not inserted values in the table".mysqli_error($conn);  
    
}
//     throw new Exception("Error Processing Request");
//  }
// catch(Exception $e)
// {
//     echo   $e->getLine(); 
// }

?>


<!DOCTYPE html>
<html>
<body>

<?php
function countLetters($matches) {
  return $matches[0] . '[' . strlen($matches[0]) . 'letter]';
}

function countDigits($matches) {
  return $matches[0] . '[' . strlen($matches[0]) . 'digit]';
}

$input = $_POST["Email"];
$patterns = [
  '/\b[a-z]+\b/i' => 'countLetters',
  '/\b[0-9]+\b/' => 'countDigits'
];
$result = preg_replace_callback_array($patterns, $input);
echo $result;
?>

</body>
</html>