<?php

$conn=mysqli_connect('localhost','root','Hrhk@9090','ajaxdb') or die("some issue occured".mysqli_connect_error());

$sql="SELECT * from `student`";

$result=mysqli_query($conn,$sql);
if($result){
    echo "Successfully Runned<br>";
    // echo $result;
}
else{
echo " can not Successfully Running".mysqli_error($conn);
}

$output="";
echo mysqli_num_rows($result);
if (mysqli_num_rows($result)>0) 
{ 
   $output ='<table border="1" width="100%" cellspacing="0" cellpadding="18px">
   <tr>
   
     <th>Id</th>
     <th>First Name</th> 
     <th>Last Name</th>
     <th>Edit</th>
     <th>Delete</th
    </tr>';
   while ($row=mysqli_fetch_assoc($result)) 
   {
     $output.="<tr>
     <td>{$row['Id']}</td>
     <td>{$row['First Name']}</td>
     <td>{$row['Last Name']}</td>
     <td><button class='edit' data-id='{$row['Id']}'>Edit</button> </td>
     <td><button class='delete' data-id='{$row['Id']}'>Delete</button> </td>
     </tr>";
    }
   $output.= "</table>";
   mysqli_close($conn);

   echo $output;
}else{
    echo "data not fond"; 
}
