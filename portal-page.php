


<?php
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
    
    
        <p>name and surname &nbsp;------ <?php  echo $_SESSION['user']['name'];  ?> &nbsp; &nbsp;           <?php  echo $_SESSION['user']['surname'];  ?> </p>
        <p>login &nbsp;;------ <?php  echo $_SESSION['user']['name1'];  ?></p>

        <p>login &nbsp;;------ <?php  echo $_SESSION['user']['id'];  ?></p>
        <p>login &nbsp;;------ <?php  echo $_SESSION['user']['tel'];  ?></p>

        <p>login &nbsp;;------ <?php  echo $_SESSION['user']['job'];  ?></p>




<br>
<br><br><br><br><br>;
<a href="status.php">общий адамдардын жумыска келып жазылулары</a><br><br>

<a href="status_id.php">жумыска регистрация отып кой</a>

<a href="qad.php">жумыска регистрация отып кой</a>


        

    </div>

  
<script>
    $(document).ready(function(){
      

        function loadtasks(){
      $.ajax({
            url: "status/status2.php",
            type: "POST",
            success:function(data){
                $("#kkk").html(data);

              
                
            }
        })
    }
     loadtasks();







     $("#addBtn2").on("click", function(e){
            if (!$("#d").val()== ''){

                e.preventDefault();

                var id=$('#d').val();


                
                $.ajax({
                    
                    url: "status/aq2.php",
                    type: "POST",
                    data:{id:id},
                    success: function(data){

                    
                    if(data==1){
                        
                                $("#d").val('');
                                loadtasks();

                        
                            }
                        
                    
                        
                    }
                });
            }
        
           

           

        });























   




        $("#addBtn").on("click", function(e){
            if (!$("#d").val()== ''){

                e.preventDefault();

var id=$('#d').val();


                
            $.ajax({
                
                url: "status/aq.php",
                type: "POST",
                data:{id:id},
                success: function(data){

                   
                  if(data==1){
                       
                            $("#d").val('');
                            loadtasks();

                      
                        }
                    
                  
                    
                }
            });
            }
        
           

           

        });

    });

    

      
</script>


<script  type="text/javascript">

 

  function validateForm()
{

var x=document.forms["validate"]["submit"].value;

if (x==null || x=="")

  {

  alert("You must select an item");

  return false;

  }

}

  </script>






    <script>
    $(document).ready(function(){
      
    function loadtasks(){
      $.ajax({
            url: "status/status2.php",
            type: "POST",
            success:function(data){
                $("#kkk").html(data);
                
            }
        })
    }
     loadtasks();



   




    

    })

      
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>





<script src="l.js"></script>




</body>
</html>