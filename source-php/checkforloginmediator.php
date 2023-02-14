<?php
include "vip_encode_decode.php";
if(isset($_POST['email'])){
   $getemail    =  $_POST['email'];
   $getemail    =  strtolower($getemail);
   $getpasscode =  $_POST['passcode'];
//    echo $getemail;
//    echo $getpasscode;
$con=mysqli_connect('localhost','root','','shadiviah');

if(mysqli_connect_errno()){
   $con=mysqli_connect('localhost','root','','shadiviah');
}
$flagemail = 0;
$flagpasscode = 0;
$queryfire = "select email,passcode,username from mediators where deletestatus = 0";
$getdata = mysqli_query($con, $queryfire);
$rowcount = mysqli_num_rows($getdata);
if($rowcount == 0){
    echo "<script>alert('*Email Not Register*');</script>";
    header('location:../Portal-Shadiviah');
    exit;
}
$i=1;
while($result = mysqli_fetch_array($getdata)){
   $dbemails[$i] = $result['email'];
   $dbpasscode[$i] = $result['passcode'];
   $dbusername[$i] = $result['username'];
   if($dbemails[$i] == $getemail){
       $flagemail = 1;
       if($dbpasscode[$i] == encode($getpasscode)){
           $flagpasscode=1;
          $cookiename = "SHADIVIAH_MEDIATOR";
          $cookiecontent = encode($dbusername[$i]);
          setcookie($cookiename,$cookiecontent,time() + (3600*24*30*12), "/");
          session_start();
          $_SESSION['mediatorusername'] = $dbusername[$i];
          header('location:../Portal/Mediator-Access');
          exit;
       }
   }
}

if($flagemail==0){
    echo "<script>alert('Email Not Match to any result');window.history.back();</script>";
    exit;
}
if($flagpasscode==0){
    echo "<script>alert('Passcode Not Match');window.history.back();</script>";
    exit;
}









}
if(!isset($_POST['email'])){
    header('location:../Home-Shadiviah');
}
?>