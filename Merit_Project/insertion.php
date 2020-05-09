<?php
session_start();
if(!isset($_SESSION["username"]))

    header('location:http://localhost/project/home.php');


?>

<?php
$name=$_POST['name'];
$subject=$_POST['subject'];
$usn=$_SESSION['username'];
$sem=$_POST['sem'];
$_SESSION['subject']=$subject;
$_SESSION['namee']=$name;

$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'logindetails');
$q="INSERT INTO insertphp (name,subject,usn,sem) VALUES ('$name','$subject','$usn','$sem')";
$status=mysqli_query($con,$q);
if($status)
{

?>
<script>
alert("INSERTED");
window.location="subjectinsertion.php";

</script>
<?php
}
else 
{

    ?>
    <script>
    alert("NOT INSERTED YOU HAVE ALREADY INSERTED");
  window.location="viewfirst.php";
    </script>
    <?php

}

?>
