<?php
echo "dddd";

$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$login = $_POST['login'];
$passw = $_POST['passw'];
       


        


$check_user =mysqli_query($connect, "SELECT * FROM `users` WHERE  (`login` = '$login' or `password`= '$passw' )");
echo(mysqli_num_rows($check_user));

print_r((mysqli_num_rows($check_user)));
if (mysqli_num_rows($check_user) > 0) {
    echo 1; 

    $user = mysqli_fetch_assoc($check_user);

    
                   
}                    
else{
    echo 0;
}



                ?>