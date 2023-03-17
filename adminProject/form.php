
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
   <h1 class="form__title">Fill Some Details of your</h1>
   <form action="" method="POST">
   <fieldset>
         <legend>About Yourself</legend>
         <div class="form-row">
            <div class="form-control">
               <label>First Name</label>
               <input type="text" name="fname" placeholder="<?php echo $fnameerr; ?>" />
            </div>               
            <div class="form-control">
               <label>Last Name</label>
               <input type="text" name="lname" placeholder="<?php echo $lnameerr;  ?>"/>
            </div>
            <div class="form-control">
               <label>Phone</label>
               <input type="text" name="phone" placeholder="<?php echo $mobileerr;  ?>" />
            </div>
         </div>
         <!--/.form-row-->
      
         <div class="form-row">

         <div class="form-control">
               <label>Email</label>
               <input type="text" name="email" placeholder="<?php echo $emailerr;  ?>"/>
            </div>               
            <div class="form-control">
                <label>City</label>
              <!-- <input type="text" name="city" placeholder="<?php echo $cityerr ?>" /> -->
               <select name="CITY" id="cars">
                <option  value="Gorakhpur">Gorakhpur</option>
                <option  value="Delhi">Delhi</option>
                <option  value="Lucknow">Lucknow</option>
                <option  value="ShriNagar">ShriNagar</option>
                <option  value="Muzzafarpur">Muzzafarpur</option>
                <option  value="Jaipur">Jaipur</option>
                <option  value="Basti">Basti</option>
                <option  value="Noida">Noida</option>
              </select>
            </div>
         </div>
         <div class="form-control">
               <label>Tell Me Something About Yourself</label>
               <input type="text" name="message" placeholder="<?php echo $msgerr; ?>" />
            </div>
         
      </fieldset>
      <div class="form__buttons">
      <input type="submit" value="Sign Up"name="submit">
     </div>
   </form><!--/form-->
   
  
</div><!--/.form__container-->


</body>
</html>