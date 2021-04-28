<?php

$connect = mysqli_connect('localhost','root','','se_project');

$query2 = "SELECT COUNT(*) as `total` FROM `att`  ";  


$dq22 = mysqli_query($connect, $query2);  

$data=mysqli_fetch_assoc($dq22);
echo $data['total'];



?>