
<?php 
session_start();





$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$id = $_SESSION['user']['id'];


?>

<?php


$birt =mysqli_query($connect, "SELECT * FROM `job`  where `id` ='$id'    order by `id` desc limit 1");




$kiz= mysqli_fetch_assoc($birt)   ?> 
               
<?php $dassy = $kiz['start_date3'];  ?>

<?php $dass = $kiz['start_time3'];  ?>
<?php $dass2= $kiz['end_time3'];  ?>

<?php $start_date = new DateTime( $dass);
$since_start = $start_date->diff(new DateTime($dass2));
?>


<p id="jkl">
<?php $df=( $since_start->h.':'.$since_start->i.':'. $since_start->s);
echo  $df;
?>  
</p>


             <?php 

         

$sqlaa = "UPDATE `job` SET `uakyt`='$df'    WHERE   `uakyt` = '
00:00:00' and `id`= '$id'";



$lolad=mysqli_query($connect,$sqlaa); 
 if($lolad){
    echo 1    ;
}
else{

    echo 2;
}