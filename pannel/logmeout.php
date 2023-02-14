<?php
 if(isset($_COOKIE['Shadiviah_Login'])){
    $cookie_name = "Shadiviah_Login";
    $cookie_value = 'null';
    setcookie($cookie_name, $cookie_value, time() - (60*60), "/");
    session_unset();
    session_destroy();
    header('location:../index.php');
    
 }else{
     header('location:../index.php');
 }
?>