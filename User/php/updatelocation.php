<?php
error_reporting(0);

include 'vip_encode_decode.php';
$lati =  $_POST['latitude'];
$long = $_POST['longitude'];
$location = "https://maps.google.com/maps?q=".$_POST['latitude'].",".$_POST['longitude']."&hl=es;z=14&amp;output=embed";
$con=mysqli_connect('localhost','root','','shadiviah');

if(!isset($_COOKIE['shadiviah_family'])){
    header('location:../../Home-Shadiviah');
    exit;
}
$wedcode = decode($_COOKIE['shadiviah_family']);
if(mysqli_connect_errno()){
$con=mysqli_connect('localhost','root','','shadiviah');
} 

$queryfire = "SELECT * FROM config WHERE wedding_code = '$wedcode'";
$dataget = mysqli_query($con,$queryfire);
$getrow = mysqli_num_rows($dataget);
if($getrow==0){
    mysqli_close($con);
    echo "<script>alert('This Feature Will Active When Your Page Become Active');window.history.back();</script>";
    exit;
}
if($getrow>1){
    mysqli_close($con);
    echo "<script>alert('SomeThing Went Wrong!! Mail us on :Help@shadiviah.in');window.history.back();</script>";
    exit;
}
if($getrow==1){
    $queryfire = "UPDATE config SET location_url = '$location' WHERE wedding_code = '$wedcode'";
    if(mysqli_query($con,$queryfire)){
      echo "<script>alert('Location Successfully Updated');window.location.assign('../../User/Pannel');</script>";
      mysqli_close($con);

    }
    else{
      echo "<script>alert('Something Went Wrong! Try Again');window.history.back();</script>";
      mysqli_close($con);

    }
}


?>