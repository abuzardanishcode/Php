<?php

include "component/connection.php";

$id=$_GET['Id'];

$fnameerr=$lnameerr=$mobileerr=$emailerr=$cityerr=$successmsg=
$msgerr="";
if(isset($_POST['Update'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mobile=$_POST['phone'];
  $email=$_POST['email'];
  $city=$_POST['CITY'];
  $msg=$_POST['message'];

  $flag= true;
  if (empty($fname)) {
      $fnameerr = "Name is required";
     
      $flag= false;
  } else {
      $name = test_input($fname);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $fnameerr = "Only letters and white space allowed";
          $flag= false;
      }
      
      else if ( strlen($name) <= 2 || strlen($name) >= 40) {
          $fnameerr="Name has to be between 2 to 40 characters";
          $flag= false;
      }
  }
  
  if (empty($mobile)) {
    $mobileerr = "Name is required";
    $flag= false;
} else {
    $mobil = test_input($mobile);
    if (!preg_match("/^[1-9][0-9]{9}$/",$mobil)) {
        $mobileerr = " Total no must be 10";
        $flag= false;
    }
    
}
  if (empty($email)) {
      $emailerr = "Email is required";
      $flag= false;
  } else {
      $email = test_input($email);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailerr = "Invalid email format<br>";
          $flag= false;
      }
  }

  if (empty($msg)) {
    $msgerr = "message is required";
    $flag= false;
}else{
    $msg= test_input($msg);
    if ( strlen($msg) <= 20 || strlen($msg) >= 100){
        $msgerr="message sholud be in between 20 to 100 letters";
        $flag= false;
    }

} 
if(empty($city)){
    $cityerr="city is required";
    $flag=false;
}

if($flag){
      $sql="UPDATE `details` SET first_name='$fname', last_name ='$lname' , Mobile_no='$mobile', email='$email', city='$city', `message`='$msg' WHERE Id=$id";

      $res=mysqli_query($conn,$sql) or die("query not runned".mysqli_error($conn));
      
      header("location:welcome.php");
}else{
    echo "some error occured";
}






}else{
    echo "first update details";
}


$sql="SELECT * FROM `details` where ID='$id'";
$res=mysqli_query($conn,$sql) or die("query error".mysqli_error($conn));

if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
?>
<!DOCTYPE html>
 <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
 </head>
 <body>
<div class="container">

 <div class="form__container">
   <h1 text-align="center"><?php echo $successmsg; ?></h1>
   <h1 class="form__title">Update User Information</h1>
   <form action="" method="POST">
   <fieldset>
         <legend>About Yourself</legend>
         <div class="form-row">
            <div class="form-control">
               <label>First Name</label>
               <input type="text" name="fname"  value="<?php echo $row['first_name'];  ?>"  />
               <div class="error" style="color:red"><?php echo $fnameerr; ?></div>
            </div>               
            <div class="form-control">
               <label>Last Name</label>
               <input type="text" name="lname" value="<?php echo $row['last_name'];  ?>" placeholder=""/>
               <div class="error" style="color:red"><?php echo $lnameerr; ?></div>
            </div>
            <div class="form-control">
               <label>Phone</label>
               <input type="text" name="phone" value="<?php echo $row['Mobile_no'];  ?>" placeholder="<?php echo $mobileerr;  ?>" />
               <div class="error" style="color:red"><?php echo $mobileerr; ?></div>
            </div>
         </div>
         <!--/.form-row-->
      
         <div class="form-row">

         <div class="form-control">
               <label>Email</label>
               <input type="text" name="email" value="<?php echo $row['email'];  ?>" placeholder="<?php echo $emailerr;  ?>"/>
               <div class="error" style="color:red"><?php echo $emailerr; ?></div>
            </div>               
            <!-- <div class="form-control">
               <label>City</label>
               <input type="text" name="city" value="<?php echo $row['city'];  ?>" placeholder="<?php echo $cityerr ?>" />
               <div class="error" style="color:red"><?php echo $cityerr; ?></div>
            </div> -->
            <div class="form-control">
                <label>City</label>
              <!-- <input type="text" name="city" placeholder="<?php echo $cityerr ?>" /> -->
               <select name="CITY" id="cars">
               <option selected value="<?php echo $row['city'];  ?>"><?php echo $row['city'];  ?></option>
                <option  value="Gorakhpur">Gorakhpur</option>
                <option  value="Delhi">Delhi</option>
                <option  value="Lucknow">Lucknow</option>
                <option  value="ShriNagar">ShriNagar</option>
                <option  value="Muzzafarpur">Muzzafarpur</option>
                <option  value="Jaipur">Jaipur</option>
                <option  value="Basti">Basti</option>
                <option  value="Noida">Noida</option>
              </select>
              <div class="error" style="color:red"><?php echo $cityerr; ?></div>
            </div>
         </div>
         <div class="form-control">
               <label>Tell Me Something About Yourself</label>
               <input type="text" name="message" value="<?php echo $row['message'];  ?>" placeholder="<?php echo $msgerr; ?>" />
               <div class="error" style="color:red"><?php echo $msgerr; ?></div>
            </div>
         
      </fieldset>
      <div class="form__buttons">
      <input type="submit" value="update" name="Update">
      <a href='welcome.php'>Cancel Now</a> 
     </div>
   </form><!--/form-->
   
  
</div><!--/.form__container-->


</body>
</html>


<?php

    };
  
}



/* 
if($flag){



if(mysqli_query($conn,$sql)){
    $successmsg = "successfully Inserted";
}else{
    echo "having some issue".mysqli_error($conn);
}
} */
/* else{
   echo "you could not submitted properly";
} */

// include "form.php";


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>




