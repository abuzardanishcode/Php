<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      </script>  
</head>
<body>
    <h1>Read JSON data</h1>
    <div id="load-data"></div>

    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
             /*    url:"https://jsonplaceholder.typicode.com/posts", */
             url:"my.json",
                type:"GET",
                success:function(data){
                    $.each(data,function(key,value){
                      /*  console.log(value.id+"  "+value.title);  */
                       $("#load-data").append(value.id+" "+value.title+"<br>"); 

                    })
                    /* $("#load-data").append(data.id+ "<br>"+data.title+"<br>"+data.body); */
                    // console.log(data);
                }
            })
        })
    </script>
</body>
</html>

<!-- shortcut -->
<!-- $.getJSON({
    "my.json",
    $.each(data,function(key,value){
                       console.log(value.id+"  "+value.title); 
                       $("#load-data").append(value.id+" "+value.title+"<br>"); 

                    })
}) -->


<?php








?>