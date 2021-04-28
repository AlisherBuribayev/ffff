
<?php 
session_start();





$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$id = $_SESSION['user']['id'];




$sql = "UPDATE `status_come` SET `go_out`=sysdate(),`status`='left' WHERE `go_out` IS NULL and  `id`= '$id'";



$lol=mysqli_query($connect,$sql); 

$check_user =mysqli_query($connect, "SELECT `users`.`tel`,   `users`.`name` , `status_come`.`oryndar`  , `status_come`.`status` , `status_come`.`go_out`,  `status_come`.`come_to` ,  `status_come`.`come_time`  ,    `users`.`job`, `users`.`surname`, `status_come`.`id`\n"
. "FROM `users`\n"
. "INNER JOIN `status_come` on  `users`.`id`=`status_come`.`id`   order by `status_come`.`come_time` desc ");




$anime= mysqli_fetch_assoc($check_user);

if($lol){
    ?>

<?php $dass = $anime['come_time'];  ?>
<?php $dass2= $anime['go_out'];  ?>



<?php $start_date = new DateTime( $dass);
$since_start = $start_date->diff(new DateTime($dass2));

$dap=$since_start->format('%H:%I:%S');;
echo $dap;

echo date_format('17:45:12', 'HH:i::sa');
#output: 2012-03-24 17:45:12
$dap2=strval($dap);


$sql2 = "UPDATE `status_come`  SET   `arasy` = '$dap'  where  `id`= '$id'    	order by `oryndar` DESC limit 1 ";
$day=mysqli_query($connect,$sql2); 

?>




    <?php
}
?>