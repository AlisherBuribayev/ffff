
<?php 
session_start();





$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$id = $_SESSION['user']['id'];




$sql = "UPDATE `job` SET `end_time3`=sysdate(),`statusing`='finished' WHERE `end_time3` IS NULL and  `id`= '$id'";



$lol=mysqli_query($connect,$sql); 
 if($lol){
    echo 1;
}
else{

    echo 2;
}
?>