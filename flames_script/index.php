<!DOCTYPE html>
<html lang="en">
<head>
    <title>FLAMES</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="s.js"></script>
    <link rel="stylesheet" href="style2.css">
    
</head>


<body >
    <form action="val.php" method="post">
    
    <center>
        <h1  id="flames" style="font-size: 62px; color: cornsilk;">FLAMES!</h1>
    </center>
    
        <br>
        <br>
        <center>
            <br><pre style="font-size: 20px;"><b style="color: blanchedalmond;">ENTER your NAME</b> </pre>
      <input  placeholder="TEXT" style="font-size: 20px;" type="text" name="boy" id="b1"  onkeyup="captial()" >

      <br>
      <br>
      <br>
      <h1 id="print" ></h1>
      <pre style="font-size: 20px;" style="color: aliceblue;"><b style="color: blanchedalmond;">ENTER his/her NAME</b> </pre> 
      <input placeholder="TEXT" style="font-size: 20px;" type="text" name="girl" id="b2" o onkeyup="captial()">

    
    <CENter>
        <BR></BR>
        <input id="b3" style="font-size: 25PX;"  type="submit" value="sumbit">
  
</form>
</body>
<script>

function captial()
{
var x=document.getElementById('b1');
var y=document.getElementById('b2');
x.value=x.value.toUpperCase();
y.value=y.value.toUpperCase();
}





</script>
</html>
