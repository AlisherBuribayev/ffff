<?php


$connect = mysqli_connect('localhost','root','','se_project');

       

mysqli_set_charset( $connect, 'utf8');



$check_user =mysqli_query($connect, "SELECT `users`.`tel`,   `users`.`name`   , `status_come`.`status` , `status_come`.`go_out`,  `status_come`.`come_to` ,  `status_come`.`come_time`  ,    `users`.`job`, `users`.`surname`, `status_come`.`id`\n"
. "FROM `users`\n"
. "INNER JOIN `status_come` ON `users`.`id` = `status_come`.`id`   order by `status_come`.`come_time` desc ");




?>


<?php

            
$anime= mysqli_fetch_assoc($check_user) ?> 


                   
            
 <p id="star2"><?php echo $anime['status'].'.   came    at  '. $anime['come_time'] ?> </p>
                    

























