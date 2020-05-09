<?php
session_start();
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



$nnaa=$_SESSION['username'];

$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'logindetails');
$q="SELECT * from insertphp WHERE usn='$nnaa'";
$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);
if(!$num)
{
    ?><script>
    alert('NO RESULT FOUND');
    alert('PROCEEDING TO HOME PAGE');
    window.location="main.php";
    
    </script>
    <?php
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="ss.css">
</head>
<body>
<center>
<h1>
   
   HELLO <?php echo  $_SESSION["username"];?>,NOW YOUR ARE ACTIVE
   <a href="logout.php">LOGOUT</a>  
   <br><br><br><br> 
   <h2 id="y1">SUBJECTS</h2>
   
</h1></center>

<br><br><br>
<center>
<table id ="t1">
<tr>
<th>NAME</th>
<th>T.SUBJECT</th>
<th>USN</th>
<th>SEM</th>
<th>SUB1</th>
<th>SUB2</th>
<th>SUB3</th>
<th>SUB4</th>
<th>SUB5</th>
<th>SUB6</th>
<th>C1</th>
<th>C2</th>
<th>C3</th>
<th>C4</th>
<th>C5</th>
<th>C6</th>
</tr>
<?php

    $fetch=mysqli_fetch_array($result);
    ?>
    <tr>
    <td><?php echo $fetch['name'] ?></td>
    <td><?php echo $fetch['subject'] ?></td>
    <td><?php echo $fetch['usn'] ?></td>
    <td><?php echo $fetch['sem'] ?></td>
    <td><?php echo $fetch['SUB1'] ?></td>
    <td><?php echo $fetch['sub2'] ?></td>
    <td><?php echo $fetch['sub3'] ?></td>
    <td><?php echo $fetch['sub4'] ?></td>
    <td><?php echo $fetch['sub5'] ?></td>
    <td><?php echo $fetch['sub6'] ?></td>
    <td><?php echo $fetch['c1'] ?></td>
    <td><?php echo $fetch['c2'] ?></td>
    <td><?php echo $fetch['c3'] ?></td>
    <td><?php echo $fetch['c4'] ?></td>
    <td><?php echo $fetch['c5'] ?></td>
    <td><?php echo $fetch['c6'] ?></td>
    
    </tr>






</table></center>
</body><br>

<br><br><br>
<a style="font-size:30px" href="main.php"><---GO BACK</a>
</html>


