<?php
include "nav.php";
include "component/selectAll.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Document</title>
</head>
<body>
<div class="container1">
 <h1>Product Stock</h1> 
 <div class='container2'>
 <?php
 
//  echo ';
 while ($row=mysqli_fetch_assoc($result)) 
//  echo "<div class='items'>";
{
 ?> 
  
  <!-- <div class="tem"> -->
  <figure class="snip1268">
  <div class="image">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample4.jpg" height="150px" width="280px" alt="sq-sample4"/>
    <div class="icons">
      <a href="#"><i class="ion-star"></i></a>
      <a href="#"> <i class="ion-share"></i></a>
      <a href="#"> <i class="ion-search"></i></a>
    </div>
    <a href="#" class="add-to-cart">Add to Cart</a>
  </div>
  <figcaption>
    <h2><?php echo $row['first_name'] ?></h2>
    <p><?php echo $row['message'] ?></p>
    <div class="price">Price $ <?php echo $row['Id'] ?> </div>
  </figcaption>
  </figure>
<!-- </div> -->
<?php

}
?>
</div>
</div>

<!-- <figure class="snip1268 hover">
  <div class="image">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample17.jpg" alt="sq-sample17"/>
    <div class="icons">
      <a href="#"><i class="ion-star"></i></a>
      <a href="#"> <i class="ion-share"></i></a>
      <a href="#"> <i class="ion-search"></i></a>
    </div>
    <a href="#" class="add-to-cart">Add to Cart</a>
  </div>
  <figcaption>
    <h2>Winter Clothes</h2>
    <p>If something is so complicated that you can't explain it in 10 seconds, then it's probably not worth knowing anyway.</p>
    <div class="price">$75.00 </div>
  </figcaption>
</figure>
<figure class="snip1268">
  <div class="image">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
    <div class="icons">
      <a href="#"><i class="ion-star"></i></a>
      <a href="#"> <i class="ion-share"></i></a>
      <a href="#"> <i class="ion-search"></i></a>
    </div>
    <a href="#" class="add-to-cart">Add to Cart</a>
  </div>
  <figcaption>
    <h2>Footwear</h2>
    <p>Miss Wormwood: What state do you live in? Calvin: Denial. Miss Wormwood: I don't suppose I can argue with that!</p>
    <div class="price">$195.00 </div>
  </figcaption>
</figure> -->
</body>
</html>