<?php
        require_once('conn.php');
        session_start();
        $name=$_SESSION['name'];
        // echo $name;
        $query="SELECT * from `Account_details` where Name='$name'";
        $result=mysqli_query($conn,$query);
        if(!$result){
            die(mysqli_error($conn));
        }
        
        if(mysqli_num_rows($result)>1){
           while($value=mysqli_fetch_assoc($result)){
                $output.= "<p> Name : {$value['Name']}</p>
                    <p>Email : {$value['email']}</p> 
                    <p>Password : {$value['password']}</p> 
                    <p> Qualification : {$value['Qualification']}</p>";
             }
             echo $output;
             

               
    }
?>