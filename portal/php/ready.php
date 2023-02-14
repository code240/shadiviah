<?php
session_start();
$mobile = $_SESSION['mobile'];
$weddingcode = $_SESSION['weddingcode'];
$boyname = $_SESSION['boyname'];
$girlname = $_SESSION['girlname'];
$n1 = $mobile[-1];
$n2 = $mobile[-2];
$n3 = $mobile[-3];
$boyname = explode(' ',$boyname);
$girlname = explode(' ',$girlname);
$b = strtolower($boyname[0]);
$g = strtolower($girlname[0]);
$b = ucfirst($b);
$g = ucfirst($g);  


$con=mysqli_connect('localhost','root','','shadiviah');
if(mysqli_connect_errno()){
  $con=mysqli_connect('localhost','root','','shadiviah');
}
$queryfire = "select pagename from wedding where wedding_code = '$weddingcode'";
$getdata = mysqli_query($con,$queryfire);

while($result = mysqli_fetch_array($getdata)){
    $data = $result['pagename']; 
}
$url = "http://www.shadiviah.in/"."Wedding/".$data.".php/";
mysqli_close($con);
// $url = "http://www.shadiviah.in/"."Wedding/".$b."weds".$g."_".$n1.$n2.$n3.".php"."/";



?>