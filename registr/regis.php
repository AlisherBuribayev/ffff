
<?php 
$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$name = $_POST['name'];
$surname = $_POST['surname'];
$tel = $_POST['tel'];
$job = $_POST['job'];
$login = $_POST['login'];
$passw = $_POST['passw'];


$sql = "INSERT INTO `users` ( `name`,`surname`,`tel`,`job`,`login`,`password`) VALUES ('$name', '$surname', '$tel', '$job', '$login', '$passw')";




$lol=mysqli_query($connect,$sql); 

if($lol){
    echo 1;
    }
    else{
    echo 2;
    }
?>