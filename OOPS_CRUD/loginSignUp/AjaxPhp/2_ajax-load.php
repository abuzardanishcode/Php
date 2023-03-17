<?php

$conn=mysqli_connect('localhost','root','Hrhk@9090','Bootstrap') or die("some issue occured".mysqli_connect_error());

$sql="SELECT * from `SignUpForm`";

$result=mysqli_query($conn,$sql);
if($result){
    echo "Successfully Runned<br>";
    // echo $result;
}
else{
echo " can not Successfully Running".mysqli_error($conn);
}

$output="";
/* echo mysqli_num_rows($result);
if (mysqli_num_rows($result)>0)  */

$rowdataa= mysqli_fetch_all($result,MYSQLI_ASSOC);
{ 
   echo '<table border="1" width="100%" cellspacing="0" cellpadding="18px">
   <tr>
   
     <th>Id</th>
     <th>User Name</th> 
     <th>Email</th>
     <th>Password</th>
     <th>phone</th>
     <th>Edit</th>
     <th>Delete</th
    </tr>';
  /*    while ($row=mysqli_fetch_assoc($result)) 
   {
     $output.="<tr>
     <td>{$row['Id']}</td>
     <td>{$row['Name']}</td>
     <td>{$row['email']}</td>
     <td>{$row['password']}</td>
     <td>{$row['Phone']}</td>
     <td><button class='edit' data-id='{$row['Id']}'>Edit</button> </td>
     <td><button class='delete' data-id='{$row['Id']}'>Delete</button> </td>
     </tr>";
    }
   $output.= "</table>";
 */

   foreach($rowdataa as $v1)
    { echo "<tr>";
    foreach($v1 as $v2)
    {
        echo "<td>$v2</td>  ";
    }
    echo "</tr>";
  }
echo "</table>";


   mysqli_close($conn);

   echo $output;
}
/* else{
    echo "data not fond"; 
}
 */