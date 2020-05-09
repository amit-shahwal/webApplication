<?php


$boyn=$_POST['boy'];
 $girn=$_POST['girl'];


 if($boyn==$girn)
 {?>
    <script>
    alert("names cannto be same");
    window.location="index.php";
    </script>
<?php
 }
else if($boyn=="")
{
    ?>
    <script>
    alert("names cannto be empty");
    window.location="index.php";
    </script>
<?php 
}
else if($girn=="")
{?>
    <script>
    alert("names cannto be empty");
    window.location="index.php";
    </script>
<?php 

}

?>
<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"logindetails");
$q="INSERT into flames (boy,girl) VALUES ('$boyn','$girn')";
$st=mysqli_query($con,$q);


?>
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
    <link rel="stylesheet" href="styleval.css">
</head>
<body>

    
    
    <center>
        <h1  id="flames" style="font-size: 62px; color: cornsilk;">FLAMES!</h1>
    </center>
    
        <br>
        <br>
        <center>
            <br><pre style="font-size: 20px;"><b style="color: blanchedalmond;">ENTER your NAME</b> </pre>
      <input  placeholder="<?php echo $boyn?>" style="font-size: 20px;" type="text" name="boy" id="b1"  disabled >

      <br>
      <br>
      <br>
      <h1 id="print" ></h1>
      <pre style="font-size: 20px;" style="color: aliceblue;"><b style="color: blanchedalmond;">ENTER his/her NAME</b> </pre> 
      <input placeholder="<?php echo $girn?>" style="font-size: 20px;" type="text" name="girl" id="b2" disabled>

    
    <CENter>
        <BR></BR>
        <input id="b3" style="font-size: 25PX;"  type="submit" value="sumbit">
        
        <button id="b4" style="font-size: 25PX;"onclick="refresh();">REFRESH</button>
  
</form>
</body>
<script>
var boyname="<?php echo $boyn ?>";
var girlname="<?php echo $girn ?>";
var i=0;var j=0; var total; var count=0;
for(i=0;i<boyname.length;i++)
        {

            for(j=0;j<girlname.length;j++)
            {
                    if((boyname[i]==girlname[j]) || boyname[i]==" " || girlname[i]==" " ) 
                    {
                        count++;
                        break;
                    }
                    else
                    {
                        continue;
                    }
           
            }


        }
        total=(boyname.length-girlname.length)-count-2;
      var t=total+6;
        total=t;
      

var newle=document.getElementById('print');
    var x= document.createElement('h2');
    x.setAttribute("id","child");
    if(total<6)
    {

    if(total==1)
    {
        x.innerText="LOVE";
      
        
    }
    else if(total<=0)
    {
        x.innerText="YOU BOTH ARE FRIENDS";
      
    }
    else if(total==3)
    { 
       x.innerText="ATTRACTION";
      
    }
     else if(total==4||total==2)
    {
        x.innerText="MARRIAGE";
       
    }
    else if(total==5)
    {
        x.innerText="ENEMY";
      
    }

    
}
    else
    {
        x.innerHTML="SIBLINGS"
        
    }

    x.style.textAlign="center";
    x.style.color="cornsilk";
    x.style.fontSize="50px";
    x.style.fontStyle="italic";
    newle.append(x);

    



        
      









</script>
<script>
function refresh()
{
    window.location="index.php";
}
</script>
</html>