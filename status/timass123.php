

<?php

session_start();

if(isset($_POST["from_date"], $_POST["end_date"], $_POST["flex"], $_POST["week"]))  
{  
   $id= $_SESSION['user']['id'];
   $week=$_POST["week"];
   $hehe=$_POST["flex"];
 //echo $_SESSION['user']['name1'];
 //echo $_SESSION['user']['pass1'];
   $connect = mysqli_connect('localhost','root','','se_project');

   $query2 = "  
   SELECT * FROM `status_come`   WHERE `come_to` BETWEEN '".$_POST["from_date"]."' AND '".$_POST["end_date"]."'  and `id`='$id' order by `come_to` ASC  
   ";  
  
 
   $dq22 = mysqli_query($connect, $query2);  
 
if ($dq22)
{


$id= $_SESSION['user']['id'];


$time_arr = [];

$lname1=['lname1'];

$connect = mysqli_connect('localhost','root','','se_project');


mysqli_set_charset( $connect, 'utf8');
$connect = mysqli_connect('localhost','root','','se_project');


$query = "  
SELECT * FROM `status_come`   WHERE `come_to` BETWEEN '".$_POST["from_date"]."' AND '".$_POST["end_date"]."'  and `id`='$id' order by `come_to` ASC  
";  

$datetime1 = date_create($_POST["from_date"]);
    $datetime2 = date_create($_POST["end_date"]);
   
    $interval = date_diff($datetime1, $datetime2);
   
 
   $d=$interval->format("%a");
   $d=$d+1;

$dq = mysqli_query($connect, $query);  

if($dq){
$tima=[];   

while($anime= mysqli_fetch_assoc($dq)) {  
               
    array_push($tima, $anime['come_to']);

    array_push($time_arr, $anime['arasy']);


}
?>  

<?php
foreach( $tima as $a )
{
    ?><p> <?php  echo " "?>

</p>

   <?php


}
$flexi;
$hours;
$min;
$sec;
foreach( $tima as $a )
{ 

   if ($d==7){

      if (date('l', strtotime( $a))=="Monday"){

   
         for($i = 0; $i < 7; ++$i) {?>
           <tr>
      <?php  
      
           $orgDate =  $tima[$i];  
          $newDate = date("l-d", strtotime($orgDate));  
         
      ?>
                  <td><?php  echo 
                  $newDate; ?></td>
                  <td><?php echo $time_arr[$i]; ?></td>
                                                  
      
            
      
            
               </tr>
      
                      <?php
            
            $time = strtotime('00:00:00');
            $total_time = 0;
            for($z = 0; $z < 7; ++$z) {
               
               $sec_time = strtotime($time_arr[$z]) - $time;
               $total_time = $total_time + $sec_time;
            }
            $hours = intval($total_time / 3600);
            $total_time = $total_time - ($hours * 3600);
            $min = intval($total_time / 60);
            $sec = $total_time - ($min * 60);
             
         } // 0.663 ms
         print_r("The total time is");
         $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
         echo $dqq;
         
         $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
         $lol=mysqli_query($connect,$sql); 

         
         break;
      
      
      }
      

/*

elseif (date('l', strtotime( $a))=="Tuesday"){
   for($i = 0; $i <6; ++$i) {?>
      <tr>
             <td><?php echo $tima[$i]; ?></td>
             <td><?php echo $time_arr[$i]; ?></td>
                                             
 
 
 
                 </tr>
                 <?php
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 6; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
   } // 0.663 ms

   print_r("The total time is :");
   echo ("$hours:$min:$sec");

   break;





}

*/




elseif (date('l', strtotime( $a))=="Tuesday"){

   
   for($i = 0; $i < 6; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 6; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
   
   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 

  
   break;


}



elseif (date('l', strtotime( $a))=="Wednesday"){

   
   for($i = 0; $i < 5; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 5; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
         echo $dqq;
         
         $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
         $lol=mysqli_query($connect,$sql); 

   break;


}

elseif (date('l', strtotime( $a))=="Thursday"){

   
   for($i = 0; $i < 4; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 4; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
   
   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 

  
   break;


}

elseif (date('l', strtotime( $a))=="Friday"){

   
   for($i = 0; $i < 3; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 3; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
  
   break;
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
   
  
   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 


}






elseif (date('l', strtotime( $a))=="Saturday"){

   
   for($i = 0; $i < 2; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z <2; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
  
   break;

   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;

   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 


}

elseif (date('l', strtotime( $a))=="Sunday"){

   
   for($i = 0; $i < 1; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 1; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
  
   break;
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
   
  
   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 


}








else{

   
 // 0.663 ms
 print_r("The total time dddd :");
  
   break;


}

   }


























































   elseif ($d==6){

      if (date('l', strtotime( $a))=="Monday"){

   
         for($i = 0; $i < 6; ++$i) {?>
           <tr>
      <?php  
      
           $orgDate =  $tima[$i];  
          $newDate = date("l-d", strtotime($orgDate));  
         
      ?>
                  <td><?php  echo 
                  $newDate; ?></td>
                  <td><?php echo $time_arr[$i]; ?></td>
                                                  
      
      
      
            
               </tr>
      
                      <?php
            
            $time = strtotime('00:00:00');
            $total_time = 0;
            for($z = 0; $z < 6; ++$z) {
               
               $sec_time = strtotime($time_arr[$z]) - $time;
               $total_time = $total_time + $sec_time;
            }
            $hours = intval($total_time / 3600);
            $total_time = $total_time - ($hours * 3600);
            $min = intval($total_time / 60);
            $sec = $total_time - ($min * 60);
             
         } // 0.663 ms
         print_r("The total time is :");
         $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
         echo $dqq;
         
       
         $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 

         break;
      
      
      }
      

/*

elseif (date('l', strtotime( $a))=="Tuesday"){
   for($i = 0; $i <6; ++$i) {?>
      <tr>
             <td><?php echo $tima[$i]; ?></td>
             <td><?php echo $time_arr[$i]; ?></td>
                                             
 
 
 
                 </tr>
                 <?php
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 6; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
   } // 0.663 ms

   print_r("The total time is :");
   echo ("$hours:$min:$sec");

   break;





}

*/




elseif (date('l', strtotime( $a))=="Tuesday"){

   
   for($i = 0; $i < 5; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 5; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
         echo $dqq;
         
        
         $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 

   break;


}



elseif (date('l', strtotime( $a))=="Wednesday"){

   
   for($i = 0; $i < 4; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 4; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
   

   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 


   break;


}

elseif (date('l', strtotime( $a))=="Thursday"){

   
   for($i = 0; $i < 3; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 3; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
   
 
   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 

   break;


}

elseif (date('l', strtotime( $a))=="Friday"){

   
   for($i = 0; $i < 2; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 2; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
 
   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 

   break;


}






elseif (date('l', strtotime( $a))=="Saturday"){

   
   for($i = 0; $i < 1; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z <1; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
   

   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 


   break;


}








else{

   
 // 0.663 ms
 print_r("The total time dddd :");
  
   break;


}

   }






















































































   elseif ($d<=5){

      if (date('l', strtotime( $a))=="Monday"){

   
         for($i = 0; $i < 5; ++$i) {?>
           <tr>
      <?php  
      
           $orgDate =  $tima[$i];  
          $newDate = date("l-d", strtotime($orgDate));  
         
      ?>
                  <td><?php  echo 
                  $newDate; ?></td>
                  <td><?php echo $time_arr[$i]; ?></td>
                                                  
      
      
      
            
               </tr>
      
                      <?php
            
            $time = strtotime('00:00:00');
            $total_time = 0;
            for($z = 0; $z < 5; ++$z) {
               
               $sec_time = strtotime($time_arr[$z]) - $time;
               $total_time = $total_time + $sec_time;
            }
            $hours = intval($total_time / 3600);
            $total_time = $total_time - ($hours * 3600);
            $min = intval($total_time / 60);
            $sec = $total_time - ($min * 60);
             
         } // 0.663 ms
         print_r("The total time is :");
         $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
         echo $dqq;
         
        
         $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 

         break;
      
      
      }
      

/*

elseif (date('l', strtotime( $a))=="Tuesday"){
   for($i = 0; $i <6; ++$i) {?>
      <tr>
             <td><?php echo $tima[$i]; ?></td>
             <td><?php echo $time_arr[$i]; ?></td>
                                             
 
 
 
                 </tr>
                 <?php
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 6; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
   } // 0.663 ms

   print_r("The total time is :");
   echo ("$hours:$min:$sec");

   break;





}

*/




elseif (date('l', strtotime( $a))=="Tuesday"){

   
   for($i = 0; $i < 4; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 4; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
   
 
   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 


   break;


}



elseif (date('l', strtotime( $a))=="Wednesday"){

   
   for($i = 0; $i < 3; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 3; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
  
   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 

   break;


}

elseif (date('l', strtotime( $a))=="Thursday"){

   
   for($i = 0; $i < 2; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 2; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
   
   
   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 

   break;


}

elseif (date('l', strtotime( $a))=="Friday"){

   
   for($i = 0; $i < 1; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
            <td><?php echo $time_arr[$i]; ?></td>
                                            



      
         </tr>

                <?php
      
      $time = strtotime('00:00:00');
      $total_time = 0;
      for($z = 0; $z < 1; ++$z) {
         
         $sec_time = strtotime($time_arr[$z]) - $time;
         $total_time = $total_time + $sec_time;
      }
      $hours = intval($total_time / 3600);
      $total_time = $total_time - ($hours * 3600);
      $min = intval($total_time / 60);
      $sec = $total_time - ($min * 60);
       
   } // 0.663 ms
   print_r("The total time is :");
   $dqq= sprintf("%02d:%02d:%02d", $hours, $min, $sec);
   echo $dqq;
   
  
   $sql =( "INSERT INTO `week`  (`id`,`nameW`,`uakyt`,`flexi`) VALUES ('$id','$week','$dqq','$hehe')" );
   $lol=mysqli_query($connect,$sql); 

   break;


}













else{

   
 // 0.663 ms
 print_r("The total time dddd :");
  
   break;


}

   }

















































}
}
}
else{
   print_r("dddddddddddddddddddddddddddddd:");

}
 }
?>























