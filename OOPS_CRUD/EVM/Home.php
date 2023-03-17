<?php
include "comp/nav.php";
include
session_start();

echo "hi sessiom". $_SESSION['name'];
echo "hi sessiom". $_SESSION['img'];
/* 
if(empty($_SESSION['output'])){

    header("location:login.php");
}
*/
if(isset($_POST['submit'])){
    $vote=$_POST['radio'];
    echo $vote;
}








?>
<h1>Hi Brother Welcome to my Page <?php echo $_SESSION['name'];?></h1>



<div class="input-group">
    <ul class="list-group">
        <li class="list-group-item">BJP (BHARTIYA JANTA PARTY)             
            </ul>
            <div class="input-group-append" id="button-addon4">
                <button class="btn btn-outline-success" type="button" name="button">Button</button>
                
            </div>
        </div>
        
        <form action="<?PHP $_server['PHP_SELF'] ?>" method="post">
            <div class="d-flex  p-2 mt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            BHARTIYA JANTA PARTY
        </div>
        <div class="col-sm">
            BJP
        </div>
        <div class="col-sm">
            <input type="radio" name="radio" value="BJP" id="">
            <!--  <button class="btn btn-outline-success" type="button" name="button" >Button</button> -->
        </div>
    </div>
</div>
</div>
<div class="d-flex  p-2 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                Indian National Congress
            </div>
            <div class="col-sm">
                INS
            </div>
            <div class="col-sm">
                <input type="radio" name="radio" value="INS" id="">
                <!-- <button class="btn btn-outline-success" type="button" name="button">Button</button> -->
            </div>
        </div>
    </div>
</div>
<div class="d-flex  p-2 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                AAM AADMI PARTY
            </div>
            <div class="col-sm">
                AAP
    </div>
    <div class="col-sm">
        <input type="radio" name="radio" value="AAP" id="">
        <!--  <button class="btn btn-outline-success" type="button" name="button">Button</button> -->
    </div>
</div>
</div>
</div>
<div class="d-flex  p-2 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                NOTA 
            </div>
            <div class="col-sm">
                NONE
            </div>
            <div class="col-sm">
                <input type="radio" name="radio" value="NOTA" id="">
                <!-- <button class="btn btn-outline-success" type="button" name="button">Button</button> -->
            </div>
        </div>
    </div>
</div>

<input type="submit" name="submit" value="Done">
</form>



<img src="<?php echo "/var/www/html/myPhp/OOPS_CRUD/EVM/img/".$_SESSION['img'] ?>" alt="" srcset="">;