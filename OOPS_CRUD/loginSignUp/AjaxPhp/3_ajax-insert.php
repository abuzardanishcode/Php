<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>   
    <link rel="stylesheet" href="style.css">
    <title>Insert Data</title>
</head>
<body>
 <!-- <form action="ajax-insert.php" method="post">  -->
 <table id= "main" border="0" cellspacing="0">
    <tr>
        <td id="header">
            <h1>Add record with php & ajax</h1>
        </td>
    </tr>
 <form id="addForm">
    <tr>
        <td id="table-form">
               Id : <input type="number" name="id" id="id">
               Name: <input type="text" name="text" id="fname">
              Password : <input type="text" name="text" id="Lname">
               <input type="submit" value="Save" id = "save-button">
            </td>
        </tr>
 </form>   
    <div class="errormsg"></div>
    <div class="successmsg"></div>
   
    <tr>
        <td id="table-data">
           <!--  <table border="1" width="100%" cellspacing="0" cellpadding="10px">
               <tr>
                  <th>Id</th>
                  <td>First Name</td>
                  <td>Last Name</td>
               </tr>
            </table> -->
        </td>
    </tr>

 </table>

 <div id="modal">
        <div class="modal-form">
        <h5>Edit form</h5> 
        <table cellpadding="0">
            <tr  width="80%">
            <td>First Name</td>
            <td><input type="text" name="" id="edit-fname"></td>
            </tr>
            <tr>
            <td>Last Name</td>
            <td><input type="text" name="" id="edit-fname"></td>
            </tr>
        </table>
        </div>
    </div>

<!-- </form> -->

 

<script type="text/javascript">
     console.log("hello");


// For Printing Whole data  
    $ (document).ready(function (){
        function loadTable(){
            $.ajax({
                  url : "2_ajax-load.php",
                  type : "POST",
                  success : function(data){
                    $("#table-data").html(data);
                  }
                    
               });
            
        }
        loadTable();
    // INSERT VALUE WITH AJAX
        $("#save-button").on('click',function (e) {
            e.preventDefault();
            var id=$("#id").val();
            var fame=$("#fname").val();
            var lname=$("#Lname").val();
  
      if(id == "" && fname == "" && lname== ""){
               $(".errormsg").html("All fields are required").slideDown();
               $(".successmsg").slideUp();
            } 
         else{
            $.ajax({
                url : "ajax-insert.php",
                type : "POST",
                data : {id : id, Name :fname, password:lname},
                success : function(data){
                   if(data == 1){
                    loadTable();
                   $("#addform").trigger("reset");
                   $(".successmsg").html("Data Inserted Successfully").slideDown();
                   $(".errormsg").slideUp();
                   } 
                   else{
                    $(".successmsg").html("Can not insert the value").slideDown();
                   $(".errormsg").slideUp();
                   }
                }
            });
        }
        })
// For deleting Value
        $(document).on("click",".delete",function() {
            var myId=$(this).data("id");
            // alert( myId );
            // variable declare kiye hain taaki ye waala data delete kr sake 
           var element = this;
            $.ajax({
                url : "5_delete.php",
                type : "PO8T",
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
// fOR EDITING DATABASE;
    
   /*  $(document).on('click','.edit',function () {
        
    }) */
</script>

</body>
</html>