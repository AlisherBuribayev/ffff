

<?php
session_start();

    
 //echo $_SESSION['user']['name1'];
 //echo $_SESSION['user']['pass1'];
$id= $_SESSION['user']['id'];






$connect = mysqli_connect('localhost','root','','se_project');

       

mysqli_set_charset( $connect, 'utf8');




$check_user =mysqli_query($connect, "SELECT `users`.`tel`, `users`.`id`,  `users`.`name` ,`users`.`surname`, `week`.`nameW` 
 ,`week`.`uakyt`  , `week`.`flexi`\n"




. "FROM `users`\n"
. "INNER JOIN `week` on  `users`.`id`=`week`.`id` 
 order by `week`.`nameW` desc ");




?>



<?php

   while( $anime= mysqli_fetch_assoc($check_user))         {?> 


                  <tr>
                  <td><?php echo $anime['nameW'] ?></td>

                                            <td><?php echo $anime['name'] ?></td>
                                            <td><?php echo $anime['surname'] ?></td>
                                            <td><?php echo $anime['id'] ?></td>
                                            <td><?php echo $anime['uakyt'] ?></td>
                                            <td><?php echo $anime['flexi'] ?></td>
                                         




                </tr>
                  <?php 
   }
         
?>  
























