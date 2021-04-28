<?php

session_start();


$connect = mysqli_connect('localhost','root','','se_project');
mysqli_set_charset( $connect, 'utf8');

$login = $_POST['login'];
$passw = $_POST['passw'];

        


$check_user =mysqli_query($connect, "SELECT * FROM `users` WHERE  (`login` = '$login' and `password`= '$passw' )");




if (mysqli_num_rows($check_user) > 0) {
    echo "dddd";
    
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user']=[
        "name1"=>$user['login'],
        "pass1"=>$user['password'],
        "id"=>$user['id'],
        "name"=>$user['name'],
        "surname"=>$user['surname'],
        "tel"=>$user['tel'],
        "job"=>$user['job']




    ];
    
    header("Location: ../portal-page.php");

    ?>
    <script>
    alert("<?php echo $login.'       '    .$passw?>");
    </script>
    
<?php
                   
}                    
else{
    header("Location: ../login2.php");
}



                ?>
                <?php
                session_start();
                
                ?>
                
                
                



