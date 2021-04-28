
<?php 
session_start();

$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$lname1 = $_POST['sabak'];

$id = $_SESSION['user']['id'];



$sql = "INSERT INTO `job` ( `id`,`subject`,`start_date3`,`start_time3`,`statusing`) VALUES ('$id','$lname1', Sysdate(),Sysdate(),'working')    ";




$lol=mysqli_query($connect,$sql); 

if($lol){
    echo 1;
    }
    else{
    echo 2;
    }
?>