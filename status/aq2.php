
<?php 
$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$id = $_POST['id'];





$sql = "UPDATE `status_come` SET `go_out`=sysdate() ,`status`='at home' WHERE `go_out` IS NULL and  `id`= '$id'";



$lol=mysqli_query($connect,$sql); 
 if($lol){
    echo 1;
}
else{

    echo 2;
}
?>