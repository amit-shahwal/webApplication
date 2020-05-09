<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"logindetails");
$q="SELECT * FROM flames";
$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <center>
<div class="table-responsive">
  <h2>ADmin view Page</h2>
            
  <table class="table table-dark">
      <tr>
    <th>S.no.</th>
    <th>OWN</th>
    <th>PARTNER</th>

      </tr>

      <?php for($i=1;$i<=$num;$i++)
      {$fetch=mysqli_fetch_array($result);
        ?>
        <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $fetch['boy'];?> </td>
        <td><?php echo $fetch['girl'];?></td>

        </tr>
        

<?php
      }
?>
</table>
</div>

    
</body>
</center>
</html>