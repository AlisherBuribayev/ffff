




<?php
session_start();

    
 //echo $_SESSION['user']['name1'];
 //echo $_SESSION['user']['pass1'];
 echo $_SESSION['user']['id'];

 session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="job/qad.css">

    <link rel="stylesheet" href="daq.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@200&display=swap" rel="stylesheet">
<link href="https://allfont.net/allfont.css?fonts=mon-amour-one-medium" rel="stylesheet" type="text/css" />

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Newsreader:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><script src="l.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

 
<script src="gg2.js"></script>


    <title>Document</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
#basy{
  background-color:blue;

}
#kkk{
  background-color:orange;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    <form name="form1" method="POST" action="#"   >

          
         <input  type="text" placeholder = "project name" size="20"  name="lname1"  id="lname1"  required >
        
            
          <br><br><br>



            <button type="submit" class="z"   name="submit" value="келдым"   id="addBtn21"  > проект басталды  </button>

            <button type="submit"   name="submit" value="dd"   id="addBtn2" >  проект быытыру</button>
            <button type="submit"   name="submit" value="dd"   id="addBtn3" >  проект бытпеды</button>

            

        </form>
        <div id="basy">

        </div>


  <div id="kkk">
  
  

  </div>
  
  
 
  

      

    </div>












      
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>





<script src="l.js"></script>

<script >
    $(document).ready(function(){
      function loadtasks2(){
      $.ajax({
            url: "job/qad_subject_sp.php",
            type: "POST",
            success:function(data){
                $("#kkk").html(data);
                var f = document.getElementById("stats").textContent;
if(f=='working'){
  $("#addBtn21").attr("disabled", true);
  $("#addBtn2").attr("disabled", false);
  $("#addBtn3").attr("disabled", false);
}
else{
  $("#addBtn21").attr("disabled", false);
  $("#addBtn2").attr("disabled", true);
  $("#addBtn3").attr("disabled", true);
}     
            }
        })
        };


   






        $("#addBtn2").on("click", function(e){

e.preventDefault();

loadtasks2()   




var id =<?php echo  $_SESSION['user']['id']  ?>;



$.ajax({
    
    url: "job/qad_subject_up.php",
    type: "POST",
    
    success: function(data){

    
    if(data==1  ){

      

        
        loadtasks2()

            }
        
    
        
    }
});

                









});















$("#addBtn3").on("click", function(e){

e.preventDefault();

loadtasks2()   




var id =<?php echo  $_SESSION['user']['id']  ?>;



$.ajax({
    
    url: "job/qad_subject_up2.php" ,
    type: "POST",
    
    success: function(data){

    
    if(data==1  ){

      

        
        loadtasks2()

            }
        
    
        
    }
});

$.ajax({
    
    url: "job/qad_subject_up3.php" ,
    type: "POST",
    
    success: function(data){

    
  

      

        
        loadtasks2()

            
        
    
        
    }
});    









});






















        loadtasks2();

        $("#addBtn21").on("click", function(e){

            e.preventDefault();

            var sabak=$('#lname1').val();
          
           

            $.ajax({
                url: "job/qad_subject.php",
                type: "POST",
                data:{sabak:sabak},
                success: function(data){
                   if(data==1){
                    loadtasks2()

                    $("#lname1").val('');
                        
                   }
                    
                }
            });
        });

    });

      
</script>


</body>
</html>