<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Read JSON data</h1>
    <div id="load-data"></div>

    <script>
         
      /*  $.getJSON(
         "fetch-json.php",
         function(dat){
            $.each(dat,function(key,value){
            $("#load-data").append(value.Id+" "+value.First_name+value.Last_name+"<br>");
             } )
            // console.log(dat);
         }
        ); */
        $.ajax({

            url:"fetch-json.php",
            type:"POST",
            dataType: "JSON",
            success: function(data){
                $.each(data,function(key,value){
                    $("#load-data").append(value.Id);
                })
            }
        })
      
    </script>
    
</body>
</html>



<?php






?>