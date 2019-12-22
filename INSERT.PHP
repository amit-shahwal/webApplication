<?php
session_start();
if(!isset($_SESSION["username"]))

    header('location:http://localhost/project/home.php');


?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
</head>
<style>
    .div1
{

border-color: black;
border-width: 2px;

}
#nameid,#usnid,#subjectid,#semid
{

    border-radius: 1px;
    background-color: blanchedalmond;
    width: 7cm;
    border-radius: 9px;
    height: 22px;
    outline: none;
    border-color: brown;
    border-style: solid;
    padding-left: 10px;
}
#s1
{

outline: none;
background-color: darkslateblue;
border-radius: 12px;
width: 122px;
height: 35px;
border-color: black;
border-width: 2px;
font-size: 22px;
font-style:normal;
text-decoration-style: solid;

}
.div2


    {

        border-color: black;
        border-width: 2px;
        background-color: blanchedalmond;
        width: 20cm;
        }



</style>
<center>
<center>
<body>
    <div class="div2">
    <h1 id="frame">
   
    HELLO <?php echo  $_SESSION["username"];?>,NOW YOUR ARE ACTIVE
    <a href="logout.php">LOGOUT</a>   
    <h2>ENTER THE FIELDS PROVIDED BELOW</h2>
</h1>
</div>
    </center>
<body>
    <br>
    <br>
    <br>
    <div class="div1">
    <form action="insertion.php" method="post">
    <br>
    
    
        <input type="text" name="name" id="nameid" placeholder="NAME">
        <br>
        
        <br>
        <br>
        <input type="text" name="usn" id="usnid" value="<?php echo $_SESSION['username'];?>"placeholder="USN no" disabled>
        <br>
        
        <br>
        <br>
        <input type="number" name="subject" id="subjectid" placeholder="TOTAL SUBJECT">
        <br>
        <br><br>
        <input type="text" name="sem" id="semid" placeholder="SEMESTER">
        <br><br><br><br><br>
        
        <input type="submit" value="INSERT" id="s1">

    
    
    
    
    </form>
    </div>

</body></center>
<a style="font-size:30px" href="main.php"><---GO BACK</a>
</html>