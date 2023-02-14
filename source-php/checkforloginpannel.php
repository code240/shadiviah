<?php

if(isset($_POST['username']) && isset($_POST['passcode'])){
    include 'vip_encode_decode.php';
    $getusername = $_POST['username'];
    $getpasscode = $_POST['passcode'];
    $getusername = strtolower($getusername);
    $loginmatch = 0;
    $con=mysqli_connect('localhost','root','','shadiviah');
if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
}  
$queryfire = "select * from administrator where deletestatus=0 and username='$getusername'";
$getdata = mysqli_query($con , $queryfire);
$rowcount = mysqli_num_rows($getdata);
if($rowcount == 0){
    echo "<script>alert('*** INVALID USERNAME ***');window.history.back();</script>";
}
if($rowcount !=0){
$i = 1;
while($result = mysqli_fetch_array($getdata)){
   $username[$i] = strtolower($result['username']);
   $passcode[$i] = decode($result['passcode']);
   if($username[$i]==$getusername){
       if($getpasscode == $passcode[$i]){
           $loginmatch = 1;

           $cookie_name = "Shadiviah_Login";
           $cookie_value = encode($getusername);
           setcookie($cookie_name, $cookie_value, time() + (3600*24*30), "/");
           session_start();
           $_SESSION["adminusername"]=$getusername;
           header("location:../pannel/pannel.php");
       }
   }
   $i++;
}
}

if($loginmatch==0){
    echo "<script>alert('*** INVALID PASSWORD ***');window.history.back();</script>";
    
}
}
if(!isset($_POST['username'])){
    header('location:../index.php');
}

?>