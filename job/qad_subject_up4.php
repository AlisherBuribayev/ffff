
<?php 
session_start();





$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$id = $_SESSION['user']['id'];



$birt =mysqli_query($connect, "SELECT * FROM `job`  where `id` ='$id'    order by `id` ");




$time_arr = [];


while($anime= mysqli_fetch_assoc($birt)) {  
               
    array_push($time_arr, $anime['uakyt']);
    print_r($time_arr);


}


$time = strtotime('00:00:00');
$total_time = 0;
foreach( $time_arr as $ele )
{
   $sec_time = strtotime($ele) - $time;
   $total_time = $total_time + $sec_time;
}
$hours = intval($total_time / 3600);
$total_time = $total_time - ($hours * 3600);
$min = intval($total_time / 60);
$sec = $total_time - ($min * 60);
print_r("The total time is :");
echo ("$hours:$min:$sec");

?>

         