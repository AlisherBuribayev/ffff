
<?php 
$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$id = $_POST['id'];





$sql = "INSERT INTO `status_come`  (`id`) VALUES ('$id')";



$lol=mysqli_query($connect,$sql); 
 if($lol){
    echo 1;
    }
    else{
    echo 2;
    }
?>