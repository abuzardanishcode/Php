<?php
// include "comp/nav.php";
// include_once "create.php";
?>


<h1 align="center">Please Create Your Account</h1>
<div class="justify-content-center">
<form class="row g-3" action="create.php" method="POST" enctype="multipart/form-data">
  <div class="form-floating col-8">
    <input type="name" name="name"  class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Name</label>
    <?php echo $nameerr ?>
  </div>
  <div class="form-floating  col-8">
      <input type="email" class="form-control"
      name="email" id="floatingInput" placeholder="name@example.com">
      <?php echo $emailerr ?>
      <label for="floatingInput" class="form-label">Email</label>
  </div>
  <div class="form-floating  col-8">
      <input type="password" class="form-control"
      name="password"   id="floatingInput" placeholder="name@example.com">

      <label for="floatingInput" class="form-label">Password</label>
      <?php echo $passworderr ?>
  </div>
  <div class="form-floating  col-8">
      <input type="password" class="form-control"
      name="cpassword"   id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput" class="form-label"> Re Enter your Password</label>
  </div>
  <div class="form-floating  col-8">
      <input type="text" class="form-control" id="floatingInput" 
      name="address"   
      placeholder="name@example.com">
      <label for="floatingInput" class="form-label" value="abuzar">Address</label>
      <?php echo $adderr ?>
  </div>
  <div class="form-floating col-8">
      <input type="number" class="form-control" name="mobile_no" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput" class="form-label">Mobile No</label>
      <?php echo $mobileerr ?>
  </div> <br> 
  <div class="form-floating col-8">
      <select id="floatingInput" class="form-select" name="option" placeholder="name@example.com">
        <label for="floatingInput" class="form-label">State</label>
        <option   selected>Choose Your State</option>
      <option  value="UP">UP</option>
      <option value="MP">MP</option>
      <option value="MH">MH</option>
      <option value="DELHI">DELHI</option>
      <option value="BIHAR">BIHAR</option>
    </select>
    <?php echo $optionerr ?>
  </div>
  <div class="form-floating  col-8">
      <input type="file" class="form-control" id="floatingInput" 
      name="image"   
      placeholder="name@example.com">
      
      <?php echo $adderr ?>
  </div>

  <div class="form-floating col-10">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" placeholder="name@example.com">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-10">
    <button type="submit" name='submit' class="btn btn-primary">CREATE YOUR ACCOUNT</button>
  </div>
</form>
</div>