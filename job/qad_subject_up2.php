
<?php 
session_start();





$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$id = $_SESSION['user']['id'];




$sql = "UPDATE `job` SET `end_time3`=sysdate(),`statusing`='stopped' WHERE `end_time3` IS NULL and  `id`= '$id'";



$lol=mysqli_query($connect,$sql); 
 if($lol){
    echo 1;
}
else{

    echo 2;
}
?>

<?php


$birt =mysqli_query($connect, "SELECT * FROM `job`  where `id` ='$id'    order by `id` desc limit 1");




$kiz= mysqli_fetch_assoc($birt)   ?> 
               
               <?php $dassy = $kiz['start_date3'];  ?>

               <?php $dass = $kiz['start_time3'];  ?>
               <?php $dass2= $kiz['end_time3'];  ?>

               <?php $start_date = new DateTime( $dass);
$since_start = $start_date->diff(new DateTime($dass2));
echo  '  '. '  ';
?>
<br><br><br><br><br>
<p id="jkl">
<?php $df=( $since_start->h.':'.$since_start->i.':'. $since_start->s);
        echo  $df;
?>  
</p>


             <?php 

?>