<script>

function a()

{

    alert('WRONG ID AND PASSWORD');
}
</script>
<?php
session_start();
  $user=$_POST['username'];
$pass=$_POST['password'];
     $con=mysqli_connect("localhost","root");
    if(!$con)
    
    echo "not\n";
               
   mysqli_select_db($con,'logindetails');
     $q= "SELECT * from user where username='$user' && password='$pass' ";
    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
  //  echo "<h1>login successful<h1>";
   
   
    $user1=strtoupper($user);
    $_SESSION['username'] =$user1;
   // header("Location: https://localhost/main.php");
    
   ?> <script>
   //alert('PASSWORD IS WRONG');
   window.location="main.php";
   </script>
   
   <?php
    
    }
    
    else 
    {//echo '<script>a();
       // window.location="home.php";
        //</script>'
        
        //;
        
        mysqli_select_db($con,'logindetails');
     $qee= "SELECT * from user where username='$user' ";
    $resultt=mysqli_query($con,$qee);
    $numm=mysqli_num_rows($resultt);
    

        if($numm==1)
        {
            ?> <script>
            alert('PASSWORD IS WRONG');
            window.location="home.php";
            </script>
            
            <?php
        }
        else
        { ?>
           <script>
       a();
        window.location="home.php";
        </script>
        <?php
        

    
            }
}
?>


