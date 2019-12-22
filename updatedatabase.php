<?php session_start();

$nna=$_SESSION['username'];
$nam=$_POST['nameu'];
$sub=$_POST['subu'];
$se=$_POST['semu'];
$usnuu=$_POST['usnu'];
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><center>
<h1>
   
   HELLO <?php echo  $_SESSION["username"];?>,NOW YOUR ARE ACTIVE
   <a href="logout.php">LOGOUT</a>   
   <h2>ENTER THE FIELDS PROVIDED BELOW</h2>
   
</h1></center>
</html>
<?php 

$j=0;$k=0;for($i=1;$i<=6;$i++)
{$index="b".$i;
if(isset($_POST[$index]))
{
    $subject[$i]=$_POST[$index];
}
else
continue;

}
$j=0;$k=0;for($i=1;$i<=6;$i++)
{$index="c".$i;
if(isset($_POST[$index]))
{
    $credits[$i]=$_POST[$index];
}
else
continue;

}

$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'logindetails');
for($i=1;$i<=6;$i++)
{
$indexs="sub".$i;
    $indexc="c".$i;
    
    
$q=" UPDATE insertphp SET $indexs='$subject[$i]' ,$indexc='$credits[$i]',name='$nam',subject='$sub',usn='$usnuu',sem='$se'
WHERE usn='$nna' ";

$status=mysqli_query($con,$q);
}
if($status)
{
?><script>

alert("INSERTED ALL SUBJECT PROCEEDING TO HOME PAGE");
window.location="main.php";


</script>

<?php


}
else 
{
?><script>

alert("NOT INSERTED TRY AGAIN LATER");
window.location="main.php";

</script>
<?php
}
?>