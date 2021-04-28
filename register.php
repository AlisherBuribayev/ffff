
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="b.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

        <div class="login">
          <div class="login-screen">
            <div class="app-title">
              <h1>Registration</h1>
            </div>
      
            <div class="login-form">
              <div class="control-group">
              <input type="text" class="login-field" value="" placeholder="name" name="name" id="lname1">
              <label class="login-field-icon fui-user" for="login-name"></label>
              </div>
      
              <div class="control-group">
              <input type="text" class="login-field" value="" placeholder="surname" name="surname"  id="lname2">
              <label class="login-field-icon fui-lock" for="login-pass"></label>
              </div>
              <div class="control-group">
                <input type="text" class="login-field" value="" placeholder="username"   name="login"     id="lname5">
                <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                <div class="control-group">
                    <input type="password" class="login-field" value="" placeholder="password"  name="passw"     id="lname6" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
              <div class="control-group">
                <input type="text" class="login-field" value="" placeholder="telephone" name="tel"     id="lname3">
                <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                <div class="control-group">
                    <input type="text" class="login-field" value="" placeholder="job" name="job"     id="lname4">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-large btn-block" class="acaa" id="addBtn" value="отправить" name="submit" > create
</button>
              
            </div>
          </div>
        </div>
      
      


    <script>
        $(document).ready(function(){
          
    
    
          
    
       
    
          
    
    
            $("#addBtn").on("click", function(e){
    
                e.preventDefault();
    
                var name=$('#lname1').val();
                var surname=$('#lname2').val();
                var tel=$('#lname3').val();
                var job=$('#lname4').val();
                var login=$('#lname5').val();
                var passw=$('#lname6').val();
               
    
                $.ajax({
                    url: "registr/regis.php",
                    type: "POST",

                    data:{name:name,surname:surname,tel:tel,job:job,login:login,passw:passw},
                    success: function(data){
                       if(data==1){
                            $("#lname1").val('');
                            $("#lname2").val('');
                            $("#lname3").val('');
                            $("#lname4").val('');
                            $("#lname5").val('');
                            $("#lname6").val('');
                       }
                        
                    }
                });
            });
    
        });
    
          
    </script>
    <script src="jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    
    
    
</body>
</html>

