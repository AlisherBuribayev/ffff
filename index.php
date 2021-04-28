

<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="b.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="daq.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@200&display=swap" rel="stylesheet">
<link href="https://allfont.net/allfont.css?fonts=mon-amour-one-medium" rel="stylesheet" type="text/css" />

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Newsreader:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <title>Document</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


   
</head>
<body>
    



<form action="registr/jk.php" method="post">


<div class="login">
          <div class="login-screen">
            <div class="app-title">
              <h1>Login</h1>
            </div>
      
            <div class="login-form">
              <div class="control-group">
              <input type="text" name="login" placeholder="login" id="lname1">

             <!-- <input type="text" class="login-field" value="" placeholder="name" name="name" id="lname1">-->
              <label class="login-field-icon fui-user" for="login-name"></label>
              </div>
      
            
                <div class="control-group">
                <!--     <input type="text" class="login-field" value="" placeholder="job" name="job"     id="lname4">-->

                <input type="password" name="passw" placeholder="password"  id="lname2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" requiredpattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                   
                                
            <input type="submit" class="btn btn-primary btn-large btn-block" onclick=
            "document.getElementById(
             'myInput').value = ''"                class="acaa" id="dasq" value="отправить" name="submit" >

                 
                    
            </div>
          </div>
        </div>
      











           



    </div>




    </form>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>





<script>
    $(document).ready(function(){
      



    $("#dasq").on("click", function(e){

            e.preventDefault();


            $("#lname1").val('');
            $("#lname2").val('');

                
                 
                 
            
        
           

           

        });
    });

</body>
</html>



















