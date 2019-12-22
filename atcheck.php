<?php
session_start();
$usnnnn=$_SESSION['username'];

if(!isset($_SESSION['username']))
{
    ?>
    <script>
    alert("FIRST INSERT THE INFORMATION");
    alert("PROCEEDING TO MAIN PAGE");
    window.location="main.php"
    </script>
    <?php
}
$sub=$_POST['subjectname'];
for($i=1;$i<=6;$i++)
{$indexs="sub".$i;

$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'logindetails');
$q="SELECT * from insertphp WHERE usn='$usnnnn' && $indexs='$sub'";
$result=mysqli_query($con,$q);
$nummm=mysqli_num_rows($result);
if($nummm)
{
break;
}
}
if(!$nummm)
{
    ?>
    <script>
    alert("WRONG SUBJECT");
    
    window.location="main.php"
    </script>
    <?php


}
$fetch=mysqli_fetch_array($result);
$cc="c".$i;
$bu=$fetch[$cc];
$bunk=2*$bu;




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
<h1>
   
   HELLO <?php echo  $_SESSION["username"];?>,NOW YOUR ARE ACTIVE
   <a href="logout.php">LOGOUT</a>   
</h1>
<br><br><br><br><br><br>
    <h1 style="color:red; font-size:50px;" >HURAAY!! YOU CAN BUNK <?php echo $bunk?> NUMBER OF CLASSES!</h1>

<br><br><br>
<a href="attendance.php"style="color:green; font-size:50px; ">WANA CHECK MORE?</a>
</body>
</center>
<br><br><br>
<a style="font-size:30px" href="main.php"><---HOME PAGE</a>

</html>