

<?php
session_start();

    
 //echo $_SESSION['user']['name1'];
 //echo $_SESSION['user']['pass1'];
$id= $_SESSION['user']['id'];






$connect = mysqli_connect('localhost','root','','se_project');

       

mysqli_set_charset( $connect, 'utf8');



$check_user =mysqli_query($connect, "SELECT * from `users`  ");




?>



<?php

   while( $anime= mysqli_fetch_assoc($check_user))         {?> 


                  <tr>
                                            <td><?php echo $anime['name'] ?></td>
                                            <td><?php echo $anime['surname'] ?></td>
                                            <td><?php echo $anime['tel'] ?></td>
                                            <td><?php echo $anime['job'] ?></td>
                                            <td><?php echo $anime['login'] ?></td>




                </tr>
                  <?php 
   }
         
?>  
























