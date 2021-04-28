

<?php
session_start();

    
 //echo $_SESSION['user']['name1'];
 //echo $_SESSION['user']['pass1'];
$id= $_SESSION['user']['id'];


$time_arr = [];



$connect = mysqli_connect('localhost','root','','se_project');

$d=$_POST['from_date'] ;

mysqli_set_charset( $connect, 'utf8');


$dq =mysqli_query($connect, "SELECT * from `xxx` where `kun` > '2021-04-19'  order by `kun` ASC");



?>
  <tr>
             <td><?php echo $d ?></td>
                                             
    

 
 
                 </tr>


<?php

         


$tima=[];   

while($anime= mysqli_fetch_assoc($dq)) {  
               
    array_push($tima, $anime['kun']);

    array_push($time_arr, $anime['login']);



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
{ if (date('l', strtotime( $a))=="Monday"){
   for($i = 0; $i < 7; ++$i) {?>
     <tr>
            <td><?php echo $tima[$i]; ?></td>
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
   print_r("The total time is :");
   echo ("$hours:$min:$sec"); 
   ?>
  
      
<?php
   break;


}



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

















elseif (date('l', strtotime( $a))=="Wednesday"){
   for($i = 0; $i <5; ++$i) {?>
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
   echo ("$hours:$min:$sec");

   break;


}









elseif (date('l', strtotime( $a))=="Thursday"){
   for($i = 0; $i <4; ++$i) {?>
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
   echo ("$hours:$min:$sec");

   break;


}









elseif (date('l', strtotime( $a))=="Friday"){
   for($i = 0; $i <3; ++$i) {?>
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
   echo ("$hours:$min:$sec");

   break;


}





elseif (date('l', strtotime( $a))=="Saturday"){
   for($i = 0; $i <2; ++$i) {?>
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
   echo ("$hours:$min:$sec");

   break;


}






















elseif (date('l', strtotime( $a))=="Sunday"){
   for($i = 0; $i <1; ++$i) {?>
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
   echo ("$hours:$min:$sec");

   break;


}



}

?>
