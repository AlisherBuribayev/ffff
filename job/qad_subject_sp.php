
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="qad.css">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>



<?php
session_start();

    
 //echo $_SESSION['user']['name1'];
 //echo $_SESSION['user']['pass1'];
$id= $_SESSION['user']['id'];






$connect = mysqli_connect('localhost','root','','se_project');

       

mysqli_set_charset( $connect, 'utf8');



$check_user =mysqli_query($connect, "SELECT * FROM `job` WHERE  `start_date3`=  CURRENT_DATE()  
 and  `id`='$id' order by `start_time3` desc ");



$lola =mysqli_query($connect, "SELECT * FROM `job`  where `id` ='$id'    order by `id` desc limit 1");

?>



<?php

            ?>

<?php
$dass;



while($anime= mysqli_fetch_assoc($check_user)) {   ?> 
               

                  <div id="cc"   > 
                  
                  <?php $dass= $anime['start_date3'];  ?>
                  
                    <div ><p id =""><?php echo $anime['id'];  ?></p>
                    </div>



                    <div ><p id =""><?php echo $anime['subject']  ?></p>
                    </div>

                    <div ><p id =""><?php echo $anime['start_time3']  ?></p>
                    </div>


                    <div ><p id =""><?php echo $anime['end_time3']  ?></p>
                    </div>



                    <div ><p id ="stats"><?php echo $anime['statusing']  ?></p>
                    </div>



                    
                    <div ><p id =""><?php echo $anime['end_time3']  ?></p>
                    </div>
                    <div ><p id =""><?php echo $anime['uakyt']  ?></p>
                    </div>

                  </div>
                  <?php }
$dass;

?>

<?php


$kiz= mysqli_fetch_assoc($lola)   ?> 
               
               <?php $dassy = $kiz['start_date3'];  ?>

               <?php $dass = $kiz['start_time3'];  ?>
               <?php $dass2= $kiz['end_time3'];  ?>

               <?php $start_date = new DateTime( $dass);
$since_start = $start_date->diff(new DateTime($dass2));
echo  '  '. '  ';
?>
<br><br><br><br><br>



             <?php 
echo $dassy;

         
?>  

<!--<div  class="time"    ><p id ="star"><?php    echo $dass ?></p>
                    </div>
-->


















