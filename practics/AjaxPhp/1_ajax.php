<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">  
 </script>   
        <title>My Ajax Page</title>
    </head>
    <body>
    <table>
        <tr>
            <h1>PHP with Ajax</h1>
            </tr>
            
            <tr>
                <td id="table-load">
                    <input type="button" id="load-button" value="Load Data">
                    </td>
                    </tr>
                    <td id="table-data">
                        
                        </td>
                        </table>
                        
            
                        <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> -->


                      <!--   <script type="text/javascript"> 
$(document).ready(function() {
    console.log("hi");
    $("#load-button").on('click',function (e) {
        console.log("hi"); 
        $.ajax({
         url : "2_ajax-load.php",
            type: "POST",
            success :function (data) {
                $("#table-data").html(data);
                
            }
        });
        // document.write("hi");
    });
}); 
 </script>-->

         <script type="text/javascript">
                                $(document).ready(function(){
                                // console.log("hello");
                                $("#load-button").on('click',function(e){
                                    $.ajax({
                                        url : "2_ajax-load.php",
                                        type : "POST",

                                        success : function(data){
                                $("#table-data").html(data);
                   }
                  });
                  
                });
               
            
        });  
    </script>

</body>
</html>