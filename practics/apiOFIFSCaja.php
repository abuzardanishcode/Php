<form action="" method="post">
<input type="text" name="value" id="ifsc" placeholder="Enter Your IFSC code">
<input type="submit" name="submit" value="Check" onclick="getIFSC()"/>
</form>

<div id="result"></div>

<script src="https://code.jquery.com/jquery-3.6.2.js"></script>
<script src="">
function getIFSC(){
    var ifsc=$('#ifsc').val;
    $.ajax({
        url:'apiOfIFSC1.php',
        data:'ifsc='+ifsc,
        method:'post',
        success:function(result){
            jQuery("#result").html(result);
        }

    });

}    
</script>