<?php
echo "<h1>We Are Going To Redirect You On Home Page</h1><br>";
if(isset($_COOKIE['shadiviah_family'])){
    $cookie_name = "shadiviah_family";
    $cookie_value = 'null';
    setcookie($cookie_name, $cookie_value, time() - (60*60), "/");
    session_start();
    $_SESSION['test'] ="test";
    session_unset();
    session_destroy();
    header( "refresh:1;url=../Signin" );
}else{
    session_start();
    $_SESSION['test'] ="test";
    session_unset();
    session_destroy();
    header('location:../Home-Shadiviah');
}
?>
<h1 style="color:blue;font-family:sans-serif;font-size:3rem;">
    REDIRECTING....
</h1>