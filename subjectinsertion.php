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
    <script src="maketable.js"></script>
    <link rel="stylesheet" href="subinsert.css">
</head>

<body><center>
<h1>
   
   HELLO <?php echo  $_SESSION["username"];?>,NOW YOUR ARE ACTIVE
   <a href="logout.php">LOGOUT</a>   
   <h2>ENTER THE FIELDS PROVIDED BELOW</h2>
   
</h1>
  <p id="p1" >
<form action="subjectdatabase.php" method="post" id="form1">
    
    
</form>

  </p> 
    
</body>
</center>
<a style="font-size:30px" href="main.php"><---GO BACK</a>





    <?php for($j=1;$j<=$_SESSION['subject'];$j++)
    {?>
    <script>
var ele=document.getElementById("form1");

var x = document.createElement("INPUT");
var credits = document.createElement("INPUT");

x.setAttribute("type", "text");

x.name="b<?php echo $j; ?>";

credits.setAttribute("type", "number");


credits.name="c<?php echo $j; ?>";
x.placeholder = " enter subject<?php echo $j; ?> ";
credits.placeholder = " ENTER THE CREDITS OF SUBJECT<?php echo $j; ?> ";
ele.appendChild(x);
ele.appendChild(credits);

var z = document.createElement("p");
z.innerHTML="<br>";
ele.appendChild(z);
</script>
<?php
}
?>
<script>
var elee=document.getElementById("form1");
var zz=document.createElement("INPUT");
zz.setAttribute("type", "submit");

elee.appendChild(zz);
</script>
</html>
