

<?php
session_start();

    
 //echo $_SESSION['user']['name1'];
 //echo $_SESSION['user']['pass1'];
$id= $_SESSION['user']['id'];






$connect = mysqli_connect('localhost','root','','se_project');

       

mysqli_set_charset( $connect, 'utf8');



$check_user =mysqli_query($connect, "SELECT `users`.`tel`,   `users`.`name` , `status_come`.`oryndar`  , `status_come`.`status` , `status_come`.`go_out`,  `status_come`.`come_to` ,  `status_come`.`come_time`  ,    `users`.`job`, `users`.`surname`, `status_come`.`id`\n"
. "FROM `users`\n"
. "INNER JOIN `status_come` on  `users`.`id`=`status_come`.`id`   order by `status_come`.`come_time` desc ");




?>



<?php

   while( $anime= mysqli_fetch_assoc($check_user))         {?> 

             

<?php $dass = $anime['come_time'];  ?>
<?php $dass2= $anime['go_out'];  ?>

<?php $start_date = new DateTime( $dass);
$since_start = $start_date->diff(new DateTime($dass2));
?>
                  <tr>

                                            <td><?php echo $anime['job'] ?></td>
                                            <td><?php echo $anime['come_to'] ?></td>
                                            <td><?php echo $anime['come_time'] ?></td>
                                            <td><?php echo $anime['go_out'] ?></td>


                                            <td id="jkl">   <?php echo ( $since_start->h.':'.$since_start->i.':'. $since_start->s); ?></td>


                </tr>
                  <?php 
   }
         
?>  
























