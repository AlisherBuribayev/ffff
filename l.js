
function required()
{
var empt = document.forms["form1"]["id"].value;
if (empt == "")
{
alert("Please input a Value");
return false;
}
else 
{
alert('Code has accepted : you can try another');
return true; 
}
}

function required(inputtx) 
   {
     if (inputtx.value.length == 0)
      { 
         alert("message");  	
         return false; 
      }  	
      return true; 
      
    } 






    function myFunction() {

    var x = document.getElementById("work").value;
  document.getElementById("demo").innerHTML = x;
  console.log(x);
  alert(x);


    }