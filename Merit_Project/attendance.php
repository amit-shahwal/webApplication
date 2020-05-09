<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>


<h1>
   
   HELLO <?php echo  $_SESSION["username"];?>,NOW YOUR ARE ACTIVE
   <a href="logout.php">LOGOUT</a>   
</h1>


<div calss="form1"></div>
<form action="atcheck.php" method="post">
<br><br><br><br><br><br>
<input type="text" name="subjectname" id="sid" placeholder="ENTER THE SUBJECT">
<br><br>


<input type="submit" value="CHECK">




</form>


    </center>
    
</body>

<a style="font-size:30px" href="main.php"><---GO BACK</a>
</html>