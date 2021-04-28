

<?php
session_start();

    
 //echo $_SESSION['user']['name1'];
 //echo $_SESSION['user']['pass1'];
$id= $_SESSION['user']['id'];






$connect = mysqli_connect('localhost','root','','se_project');

       

mysqli_set_charset( $connect, 'utf8');




$check_user =mysqli_query($connect, "SELECT `users`.`tel`,   `users`.`name` , `att`.`id` 
 , `att`.`message` , `att`.`date`, `att`.`idd2`\n"




. "FROM `users`\n"
. "INNER JOIN `att` on  `users`.`id`=`att`.`id` 
 order by `att`.`idd2` desc ");




?>



<?php

   while( $anime= mysqli_fetch_assoc($check_user))         {?> 


                  <tr>
                                            <td><?php echo $anime['name'] ?></td>
                                            <td><?php echo $anime['tel'] ?></td>
                                            <td><?php echo $anime['id'] ?></td>
                                            <td><?php echo $anime['date'] ?></td>

                                            <td><?php echo $anime['message'] ?></td>
                                         




                </tr>
                  <?php 
   }
         
?>  
























