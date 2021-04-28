
<?php 
session_start();
$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$id = $_SESSION['user']['id'];





$sql =( "INSERT INTO `status_come`  (`id`,`come_to`,`come_time`,`status`) VALUES ('$id',Sysdate(),Sysdate(),'working')" );



$lol=mysqli_query($connect,$sql); 
 if($lol){
    echo 1;
}
else{

    echo 2;
}
?>