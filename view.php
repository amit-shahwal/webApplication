<?php
  

     $con=mysqli_connect("localhost","root");
    if(!$con)
    
    echo "not\n";
               
   mysqli_select_db($con,'meritlist');
     $q= "SELECT * from details";
    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
<table  id="t1" >
    <tr>
    <th>USN</th>
    <th>name</th>
    <th>phone no</th>
    </tr>

    <?php
    for($i=1;$i<=$num;$i++)
    {
        $fetch=mysqli_fetch_array($result)

        ?>

        <tr>
        <td><?php echo $fetch['usn'] ?></td>
        <td><?php echo $fetch['name'] ?></td>
        <td><?php echo $fetch['phno'] ?></td>
     </tr>
     <?php

}
?>
</table>
</body>
</html>
