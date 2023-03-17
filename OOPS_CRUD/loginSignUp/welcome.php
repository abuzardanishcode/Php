<?php
session_start();

require 'partials/_nav.php';
// require 'myLogin.php';
$cat =$_COOKIE['category'];
// session_start();
// echo "mera session storage hai ye".$_SESSION['output'];
if(empty($_SESSION['output'])){

    header("location:sorry.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <!-- <h1 align="center">Here is the list of all users which password and email is same </h1> -->
    <h1 align='center'>Welcome  to my page  </h1>
    <h6>This is your details </h6>
    <span><?php echo $_SESSION['output']; ?></span>
    <button>
        <a href="logout.php" target="" rel="noopener noreferrer">Logout</a>
    </button>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  </html>