var total=0;
var pc=0;
function captial()
{
var x=document.getElementById('b1');
var y=document.getElementById('b2');
x.value=x.value.toUpperCase();
y.value=y.value.toUpperCase();
}
function trigger()
{
    var x=event.charCode;
    if(x==13)
    {
        sumbit();
    }
    else return;
}
function sumbit()
{var i,j;
    if(pc>0)
    {
        reset1();
    }
    var count=0;
  
   
var x=document.getElementById('b1');
var boy_name=x.value;
//alert(x.value.toLow)

if(x.value=="")
{
    alert("fields can not be empty");
    reset();
    pc=0;
    return;
  
}
var y=document.getElementById('b2');
var girl_name=y.value;
if(y.value=="")
{
    alert("fields can not be empty");
    reset();
    pc=0;
    return;
    
}
if(x.value.toLowerCase()===y.value.toLowerCase())
{
    alert("fields can not be same");
    reset();
    pc=0;
    return;
   
}
if(!x.value.match(/^[a-zA-Z ]+$/))
{
    alert("NOT A VALID BOY NAME");
    reset();
    pc=0;
    return;
}
if(!y.value.match(/^[a-zA-Z ]+$/))
{
    alert("NOT A VALID GIRL NAME");
    reset();
    pc=0;
    return;
}
for(i=0;i<boy_name.length;i++)
        {

            for(j=0;j<girl_name.length;j++)
            {
                    if((boy_name[i]==girl_name[j]) || boy_name[i]==" " || girl_name[i]==" " ) 
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
        
        total=(boy_name.length+girl_name.length)-count-2;
      var  t=total+6;
        total=t;
      //alert(total)
        check();


}



function check()
{ pc++;
    var newle=document.getElementById('print');
    var x= document.createElement('h2');
    x.setAttribute("id","child");
    if(total<6)
    {

    if(total==1)
    {
        x.innerText="LOVE";
        reset();
        
    }
    else if(total<=0)
    {
        x.innerText="YOU BOTH ARE FRIENDS";
        reset();
    }
    else if(total==3)
    { 
       x.innerText="ATTRACTION";
       reset();
    }
     else if(total==4||total==2)
    {
        x.innerText="MARRIAGE";
        reset();
    }
    else if(total==5)
    {
        x.innerText="ENEMY";
       reset();
    }

    
}
    else
    {
        x.innerHTML="SIBLINGS"
        reset();
    }

    x.style.textAlign="center";
    x.style.color="cornsilk";
    x.style.fontSize="50px";
    x.style.fontStyle="italic";
    newle.append(x);


}
function reset1()
{
    var newle=document.getElementById('print');
    var rem=document.getElementById("child");
    newle.removeChild(rem);
    return;


}

function reset()
{   
    var x=document.getElementById('b1');
    var boy_name=x.value;
    var y=document.getElementById('b2');
    var girl_name=y.value;

    x.value= "";
    y.value= "";
    return;
}