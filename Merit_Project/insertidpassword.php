<?php
$uname=$_POST['username'];
$upass=$_POST['password'];

$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'logindetails');
$q="INSERT INTO user (username,password) VALUES ('$uname','$upass')";
$status=mysqli_query($con,$q);
if($status)
{

?>
<script>
alert("INSERTED");
window.location="id_p.php";
</script>
<?php
}
else 
{

    ?>
    <script>
    alert("NOT INSERTED");
    window.location="id_p.php";
    </script>
    <?php

}

?>