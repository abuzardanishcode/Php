<?php
$server = "localhost";
$username = "root";
$password = "Hrhk@9090";
$database = "Bootstrap";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error($conn));
}

?>
