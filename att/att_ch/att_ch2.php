
<?php 
$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$message = $_POST['message'];
session_start();





$id = $_POST['id'];


$sql = "INSERT INTO `att` ( `id`,`message`) VALUES ('$id', '$message')";




$lol=mysqli_query($connect,$sql); 

if($lol){
    echo 1;
    }
    else{
    echo 2;
    }
?>