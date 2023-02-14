<?php
error_reporting(0);

 if(isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
   
$cookie_name = "SHADIVIAH_MEDIATOR";
$cookie_value = "NULL";
setcookie($cookie_name, $cookie_value, time() - (60*60*24), "/");
header('location:../Portal-Shadiviah');  
session_unset();
session_destroy();
exit;
 }
if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
   header('location:../Home-Shadiviah');  
}
?>