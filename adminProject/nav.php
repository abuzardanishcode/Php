<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>    
<title>Document</title>
</head>
<body>
<!-- <nav class="navbar navbar-dark bg-dark"> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="details.php">ADD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex"  id="serch">
        <!-- <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="mysearch">Search</button> -->
        <!-- <div class="form-control"> -->
                <label>City</label>
              <!-- <input type="text" name="city" placeholder="<?php echo $cityerr ?>" /> -->
               <select id="city"  name="CITY">
               <!-- <option  selected>City</option> -->
                <option   value="Gorakhpur">Gorakhpur</option>
                <option selected  value=" ">Select</option>
                <option  value="Lucknow">Lucknow</option>
                <option  value="ShriNagar">ShriNagar</option>
                <option  value="Muzzafarpur">Muzzafarpur</option>
                <option type="submit"  value="Basti">Basti</option>
                <option  value="Delhi">Delhi</option>
              </select>
              <input class="form-control me-2" type="search" id="ser" name="search" placeholder="Search" aria-label="Search">
              <input type="submit" id="search" value="search">
            <!-- </div> -->
      </form>
      <!-- <input class="form-control me-2" type="search" name="city" placeholder="Search" aria-label="Search"> -->

      <!-- <form class="d-flex" action="search.php" method="POST"> -->
        <!-- <button class="btn btn-outline-success" type="submit" name="mysearch">Search</button> -->
       <!-- </form> -->
    </div>
  </div>
</nav>
</nav>


    <div id="table">

</div>




<script>
    
    $(document).ready(function(){
                                function loaddata(){
                                    $.ajax({
                                        url : "load.php",
                                        type : "POST",

                                        success : function(data){
                                $("#table").html(data);
                   }
                 
                  
                });
              }  
            loaddata();


          $("#search").on("click",function(e){
                e.preventDefault();
                var ser= $("#ser").val();
                var city=$("#city").val();
                // console.log(ser);
                // alert(city);
                $.ajax({
                    url:'small-searc.php',
                    // url:'search-ajax.php',
                    type:"POST",
                    data :{search:ser , mycity:city},
                    success: function(data){
                      // alert(data);
                        $("#table").html(data);
                }
            });
         });


// for deleting
         $(document).on("click",".delete",function() {
            var myId=$(this).data("id");
            // alert( myId );
            // variable declare kiye hain taaki ye waala data delete kr sake 
           var element = this;
            $.ajax({
                url : "delete-ajax.php",
                type : "POST",
                data : { id : myId},
                success : function (data) {
                 if(data){
                    // yaha pe this use isliye nahi kiye hain kyoki ye ajax ko refer karega
                    /* $(element).hide(); */
                    $(element).closest("tr").fadeOut();
                    // alert("dO8  inserted");
                  
                 }else{
                    $(".errormsg").html("Can not delete record").slideDown();
                  $(".successmsg").slideUp();
                 }
                    
                }
            })
        })
        

        });  












  //  $(document).ready(function(){
      /*    $("#search").on("click",function(e){
          e.preventDefault();
            var ser= $("#ser").val();
            var city=$("#city").val();
            // console.log(ser);
            // alert(city);
            $.ajax({
                url:'search-ajax.php',
                type:"POST",
                data :{search:ser , mycity:city},
                success: function(data){
                  // alert(data);
                    $("#table").html(data);
                }
            });
         }); */
      /*    $("#city").on("click",function(){
          var city= $(this).val();
            // console.log(ser);
            $.ajax({
                url:'search-ajax.php',
                type:"POST",
                data :{city:city},
                success: function(data){
                  // alert(data);
                    $("#table").html(data);
                }
            });
         }) */
    // });
</script>


</body>
</html>