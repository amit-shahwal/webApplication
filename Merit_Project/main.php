<?php
session_start();
if(!isset($_SESSION["username"]))

    header('location:http://localhost/project/home.php');


?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="mi.css">
</head>
<center>
<body>
    <h1>
   
    HELLO <?php echo  $_SESSION["username"];?>,NOW YOUR ARE ACTIVE
    <a href="logout.php">LOGOUT</a>   
</h1>
    </center><br><br><br><br>
    <div class="main1">
        
<li>
    
     <a style="font-size:22px" href="insert.php">INSERT</a>
     </li><br>
<li>
  <a style="font-size:22px"href="viewfirst.php">VIEW</a>
</li>
<br>
<li>
    <a style="font-size:22px" href="update.php">UPDATE</a>

</li>
<br>
<li>

<a style="font-size:22px"href="attendance.php">WANNA CHECK HOW MANY CLASSES U CAN BUNK??</a>

</li>
</div>    
    


    
</body>

</html>
