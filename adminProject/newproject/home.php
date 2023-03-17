<?php 

session_start();
if(!empty($_SESSION)){
	$name=$_SESSION['name'];
}else{
	echo "hi";
	header("location: anauthorized.php");
}

if(isset($_POST['logout'])){
	session_destroy();
	header("location: anauthorized.php");
}


echo fileatime("profile.php");
echo "<br>";
echo "Last access: ".date("F d Y H:i:s.", fileatime("profile.php"));


?>



<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Dashboard</h1>
            <img src="man.png" alt="" class="img">
            <p><?php echo $name;  ?></p>
		</div>
			<ul>
				<li><a href="#">Home</a></li>
				<a href="" id="profile">profile</a>
				<li><a href="" id="add">Add Post</a></li>
				<form action="home.php" method="post">
					<button name="logout">logout</button>
				</form>
			</ul>
		<div class="content">
			<h2>Welcome to the Dashboard</h2>
			<p>This is a sample dashboard.</p>
			<div class="d-flex">
			<div id="post">
	
			</div>
			<div id="mycont">
				<label for="">Enter Your Thinking</label>
				<input type="text" name="content" id="content">
				<input type="submit" id="add" name="submit" value="post">
			</div>
			</div>
		</div>
		<div class="profile" id="cont">

		</div>



		<script>
			$(document).ready(function(){
				$("#profile").on('click',function(e){
					e.preventDefault();
					$.ajax({
						url : 'profile.php',
						type : 'POST',
						success : function(data){
                           console.log(data);
						   $("#cont").html(data);
						}
					});
					
				});


				$("#add").on('click',function(e){
					e.preventDefault();
					var con = $("#content").val();
					alert(con);
					$.ajax({
						url : 'form.php',
						type : 'POST',
						data : { mycontent :con},
						success : function(data){
                          
						}
					});
					
				});


			 function loaddata(){
					
					$.ajax({
						url : 'view.php',
						type : 'POST',
						success : function(data){
                           console.log(data);
						   $("#post").html(data);
						}
					})
					
				}
				loaddata();
			})
		</script>
</body>			
</html>



