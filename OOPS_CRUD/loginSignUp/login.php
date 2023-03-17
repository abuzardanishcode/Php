<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Login Here </title>
</head>
<body>
    <?php

      require 'partials/loginNav.php';
     
    
    ?>
<div class="container">
<form action="myLogin.php" method="POST">
    <h1 class="text-center" >Login Now</h1>
<div class="form-group col-md-6">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" id="exampleInputPassword1">
</div>   
 <div class="form-group col-md-6">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    <div><?php echo $showError; ?></div>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</body>
</html>