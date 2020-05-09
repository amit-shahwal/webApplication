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
    <link rel="stylesheet" href="updatestyle.css">
</head>
<body>
<center>
<h1>
   
   HELLO <?php echo  $_SESSION["username"];?>,NOW YOUR ARE ACTIVE
   <a href="logout.php">LOGOUT</a>  
   <br><br>
   <h2 id="y1">EDIT SUBJECTS</h2>
   
</h1></center>

<br>
<center>
<table id ="t1">
<form action="updatedatabase.php" method="post">
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

</tr>
<?php

    $fetch=mysqli_fetch_array($result);
    ?>
   
    <tr>
    <td><input style="width:100px" type="text" name="nameu" value="<?php echo $fetch['name'] ?>"></td>
    <td><input style="width:100px" type="text" name="subu" value="<?php echo $fetch['subject'] ?>"></td>
    <td><input style="width:100px" type="text" name="usnu" value="<?php echo $fetch['usn'] ?>"></td>
    <td><input style="width:100px" type="text" name="semu" value="<?php echo $fetch['sem'] ?>"></td>
    <td><input style="width:100px" type="text" name="b1" value="<?php echo $fetch['SUB1'] ?>"></td>
    <td><input style="width:100px" type="text" name="b2" value="<?php echo $fetch['sub2'] ?>"></td>
    <td><input style="width:100px"type="text" name="b3" value="<?php echo $fetch['sub3'] ?>"></td>
    <td><input style="width:100px"type="text" name="b4" value="<?php echo $fetch['sub4'] ?>"></td>
    <td><input style="width:100px"type="text" name="b5" value="<?php echo $fetch['sub5'] ?>"></td>
    <td><input style="width:100px" type="text" name="b6" value="<?php echo $fetch['sub6'] ?>"></td>

   
    </tr>
    </table>
    <br><table id ="t2">
        <tr>

<th>C1</th>
<th>C2</th>
<th>C3</th>
<th>C4</th>
<th>C5</th>
<th>C6</th>


        </tr>

        <?php

    
    ?>
    <tr>
    <td><input style="width:100px" type="text" name="c1" value="<?php echo $fetch['c1'] ?>"></td>
    <td><input style="width:100px" type="text" name="c2" value="<?php echo $fetch['c2'] ?>"></td>
    <td><input style="width:100px" type="text" name="c3" value="<?php echo $fetch['c3'] ?>"></td>
    <td><input style="width:100px" type="text" name="c4" value="<?php echo $fetch['c4'] ?>"></td>
    <td><input style="width:100px" type="text" name="c5" value="<?php echo $fetch['c5'] ?>"></td>
    <td><input style="width:100px" type="text" name="c6" value="<?php echo $fetch['c6'] ?>"></td>
    
    </tr>



    </table>
<br>
    <td><input id="s1" type="submit" value="SUMBIT"></td>
    </form>


</center>
</body>
<br><br><br>
<a style="font-size:30px" href="main.php"><---GO BACK</a>
</html>


