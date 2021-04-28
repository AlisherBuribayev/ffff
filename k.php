

<?php
session_start();

    
 //echo $_SESSION['user']['name1'];
 //echo $_SESSION['user']['pass1'];






$connect = mysqli_connect('localhost','root','','se_project');

       

mysqli_set_charset( $connect, 'utf8');



$check_user =mysqli_query($connect, "SELECT * from `xxx` ");




?>



<?php

   while( $anime= mysqli_fetch_assoc($check_user))         {?> 

             

<?php $dass = $anime['date1'];  ?>
<?php $dass2= $anime['date2']; 


?>
 
<?php ?>


<?php


?>

<?php $start_date = new DateTime( $dass);
$since_start = $start_date->diff(new DateTime($dass2));
?>
<?php $d= ( $since_start->h.':'.$since_start->i.':'. $since_start->s) ; ?>
<?php




        $sql = "UPDATE `xxx` SET `login`=('$d') WHERE `login` IS NULL ";
        $das =mysqli_query($connect,  $sql);
?>

                  <?php 
   }
         
?>  















<?php
session_start();
$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');
$check_user =mysqli_query($connect, "SELECT * from `xxx` order by `kun` ASC");
$time_arr = [];
/*

$time = strtotime('00:00:00');
$total_time = 0;
foreach( $time_arr as $ele )
{
   $sec_time = strtotime($ele) - $time;
   $total_time = $total_time + $sec_time;
}
$hours = intval($total_time / 3600);
$total_time = $total_time - ($hours * 3600);
$min = intval($total_time / 60);
$sec = $total_time - ($min * 60);
print_r("The total time is :");
echo ("$hours:$min:$sec");
*/
?>

         









<?php 

$tima = [];
    

mysqli_set_charset( $connect, 'utf8');



$dq =mysqli_query($connect, "SELECT * from `xxx` order by `kun` ASC");


while($anime= mysqli_fetch_assoc($dq)) {  
               
    array_push($tima, $anime['kun']);

    array_push($time_arr, $anime['login']);



}
echo $tima[0];
?>

<br>
<br>


<?php
foreach( $tima as $a )
{
   echo $a."   ". date('l', strtotime( $a));;?>

   <br>

   <?php


}
$flexi;
$hours;
$min;
$sec;

foreach( $tima as $a )
{ if (date('l', strtotime( $a))=="Monday"){
   for($i = 0; $i < 7; ++$i) {
      echo $tima[$i]."----";
      echo $time_arr[$i]."----";
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

   break;


}



elseif (date('l', strtotime( $a))=="Tuesday"){
   for($i = 0; $i <6; ++$i) {
      echo $tima[$i]."----";
      echo $time_arr[$i]."----";
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


}

?>
