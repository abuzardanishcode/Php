<?php
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "Hrhk@9090";
$DATABASE = "login_page";


$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD ,$DATABASE );

if($conn){
    echo "Connection is successful<br>";

}else{
    echo "connection fail";
    die(mysqli_error($conn));
}

$sql = "SELECT * FROM signupTable";
 $result = mysqli_query($conn,$sql);
if($result){
  echo "successfull selection";
}
else{
    echo mysqli_error($conn);
}
 // $mysqli->close();
?>
<?
/* include_once('connection.php');
$quary = "SELECT * FROM student";
$result = mysqli_query($query); */
// include connection.php;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data</title>
</head>
<body>
    <table align="center" border="1px" style ="width:600px; line-height:50px">
        <tr>
            <th colspan="6"><h2>Student Detail</h2></th>   
        </tr>
            <t>
            <th> Serial No </th>
            <th> F Name </th>
            <th> Lname </th>
            <th> Email </th>
            <th> Password</th>
           
        </tr>
        <?php
            while($rows=mysqli_fetch_assoc($result)){

            
        ?>
         <tr>
                <td><?php echo $rows['Serial No.'];?></td>
                <td><?php echo $rows['Fname'];?></td>
                <td><?php echo $rows['lname'];?></td>
                <td><?php echo $rows['Email'];?></td>
                <td><?php echo $rows['Password'];?></td>
            </tr>
            <?php
            }
            ?>
    </table>      
</body>
</html>