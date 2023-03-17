<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SignUp Page</title>
</head>
<body>
    <div class="container">
 
<form action="mysignup2.php" method="POST" >
    <h1 class="text-center" >Please Create your Account
     <span> <?php echo $successMsg ; ?></span>
    </h1>
<div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" name="Name" id="exampleInputPassword1" placeholder ="<?php echo $nameErr ;?>" >
</div>   
 <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">E-mail</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder ="<?php echo $emailErr; ?>" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
<div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Password</label>enctype="multipart/form-data" 
    <input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder ="<?php echo $myPassErr ;?>" >
</div>
<div class="form-group">
    <label for="exampleInputPassword1" class="form-label">confirmPassword</label>
    <input type="password" class="form-control" name="cPassword" id="exampleInputPassword1" placeholder ="<?php echo $cPassErr ;?>" >

    <div><?php echo $passwordErr ;?></div>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="number" class="form-control" name="PhoneNo" id="exampleInputPassword1" placeholder ="<?php echo $phoneErr ;?>" >
  </div>
  <div class="form-group">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <!-- <input type="submit" value="Upload Image" name="image"> -->
</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</body>
</html>