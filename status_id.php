




<?php
session_start();

    
 //echo $_SESSION['user']['name1'];
 //echo $_SESSION['user']['pass1'];
 echo $_SESSION['user']['id'];


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    <form name="form1" method="POST" action="#"   >

            <span>
                id
            
            </span>
           <!-- <input  type="text" placeholder = "Post a question?" name="id"  id="d"  required >-->
        
            
          


            <button type="submit" class="z"   name="submit" value="келдым"   id="addBtn21"  >----- </button>

            <button type="submit"   name="submit" value="dd"   id="addBtn2" >  ////</button>


        </form>

<a href="status.php">obwem</a>

        

    </div>

    
<table>
  <tr>
  <th>№ records</th>

    <th>name</th>
    <th>surname</th>
    <th>telephone</th>
    <th>job</th>
    <th>come_to</th>
    <th>come_time</th>
    <th>left</th>
    <th>status</th>

  </tr>
  <tbody id="kkk">

  </tbody>
  

 
  
</table>



<script type="text/javascript">

function myFunction() {

  var x = document.getElementById("work").textContent;
}
</script>

<script type="text/javascript">
    $(document).ready(function(){

        function loadtasks23(){


        
        var f = document.getElementById("star").textContent;

                
                if(f=='ddddd'){
                    alert(f);
                    $("#addBtn21").attr("disabled", false);

                   // document.getElementById("addBtn21").disabled = true;
                    
                  //  document.getElementById("addBtn2").disabled = false;

                        



                }
                else{
                    $("#addBtn21").attr("disabled", true);


                    //document.getElementById("addBtn21").disabled = false;
                    //document.getElementById("addBtn2").disabled = true;


                }
            }
        function loadtasks2(){
      $.ajax({
            url: "status/status_id2.php",
            type: "POST",
            success:function(data){
                $("#kkk").html(data);
                
                var f = document.getElementById("star").textContent;    

                
if(f=='ddddd'){
    alert("kalau");
    $("#addBtn21").attr("disabled", false);
    $("#addBtn2").attr("disabled", true);



}
else{
    alert("oy neeet")
    $("#addBtn21").attr("disabled", true);

    $("#addBtn2").attr("disabled", false);


}   
                
            }
        })
        };

  
    

                        loadtasks2()


     $("#addBtn2").on("click", function(e){

                e.preventDefault();
              
                loadtasks2()   




                var id =<?php echo  $_SESSION['user']['id']  ?>;

               
                
                $.ajax({
                    
                    url: "status/status_id4.php",
                    type: "POST",
                    data:{id:id},
                    
                    success: function(data){

                    
                    if(data==1  ){

                      

                        
                        loadtasks2()

                            }
                        
                    
                        
                    }
                });
            
                                
               


              

           

           

        });


        




        $("#addBtn21").on("click", function(e){

                e.preventDefault();
                loadtasks2()   

                
                var id =<?php echo  $_SESSION['user']['id']  ?>;

            $.ajax({
                
                url: "status/status_id3.php",
                type: "POST",
                data:{id:id},
                success: function(data){
                    loadtasks2()                   
                   
                      

                    
                  
                    
                }
            });
          

            
        
           

           

        });    

    });

    

      
</script>








      
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>





<script src="l.js"></script>




</body>
</html>