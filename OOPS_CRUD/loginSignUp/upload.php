<?php

/* if(isset($_FILES['image'])){

   echo "<pre>";
   print_r($_FILES);
   echo "</pre>";

   $file_name= $_FILES['image']['name'];
    $file_size= $_FILES['image']['size'];
    $file_tmp= $_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];

 move_uploaded_file($file_tmp, "uploadimage".$file_name);

} */

if(isset($_FILES['image'])){

  $file_name= $_FILES['image']['name'];

  $file_tmp= $_FILES['image']['tmp_name'];
$destination="/var/www/html/myPhp/OOPS_CRUD/loginSignUp/myImg".$file_name;
  echo $file_tmp;
  move_uploaded_file($file_tmp, $destination);
}



?>
<?php
$target_dir = "uploadimage/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
echo "hi this is your ".  $uploadOk;
?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload A photo</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">


       <input type="file" name="image" id=""><br>
       <input type="submit" value="Submit Now">
    </form>
</body>
</html>