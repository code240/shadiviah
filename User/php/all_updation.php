<?php
error_reporting(0);

include 'cookie_check.php';
include 'vip_encode_decode.php';
$wedcode = decode($_COOKIE['shadiviah_family']);
$con=mysqli_connect('localhost','root','','shadiviah');
if(mysqli_connect_errno()){
$con=mysqli_connect('localhost','root','','shadiviah');
}

function updategroomname($name){
  $wedcode = $GLOBALS['wedcode'];
  $queryfire = "UPDATE wedding SET boy = '$name' WHERE wedding_code = '$wedcode'";
  if(mysqli_query($GLOBALS['con'],$queryfire)){
      echo "<script>alert('UPDATION SUCCESSFULL !!!');</script>";
  }else{
    echo "<script>alert('SOMETHING WENT WRONG !!!');</script>";
  }
 }



 function updategroomaddress($name){
    $wedcode = $GLOBALS['wedcode'];
    $queryfire = "UPDATE wedding SET boy_address = '$name' WHERE wedding_code = '$wedcode'";
    if(mysqli_query($GLOBALS['con'],$queryfire)){
        echo "<script>alert('UPDATION SUCCESSFULL !!!');</script>";
    }else{
      echo "<script>alert('SOMETHING WENT WRONG !!!');</script>";
    }
 }
 


 function updateboyfather($name){
    $wedcode = $GLOBALS['wedcode'];
    $queryfire = "UPDATE wedding SET boy_father = '$name' WHERE wedding_code = '$wedcode'";
    if(mysqli_query($GLOBALS['con'],$queryfire)){
        echo "<script>alert('UPDATION SUCCESSFULL !!!');</script>";
    }else{
      echo "<script>alert('SOMETHING WENT WRONG !!!');</script>";
    }
 }

 


 function updateboymother($name){
    $wedcode = $GLOBALS['wedcode'];
    $queryfire = "UPDATE wedding SET boy_mother = '$name' WHERE wedding_code = '$wedcode'";
    if(mysqli_query($GLOBALS['con'],$queryfire)){
        echo "<script>alert('UPDATION SUCCESSFULL !!!');</script>";
    }else{
      echo "<script>alert('SOMETHING WENT WRONG !!!');</script>";
    }
 }



 


 function updatelagan($name){
    $wedcode = $GLOBALS['wedcode'];
    $queryfire = "UPDATE wedding SET program_address = '$name' WHERE wedding_code = '$wedcode'";
    if(mysqli_query($GLOBALS['con'],$queryfire)){
        echo "<script>alert('UPDATION SUCCESSFULL !!!');</script>";
    }else{
      echo "<script>alert('SOMETHING WENT WRONG !!!');</script>";
    }
 }

 


 function updategirlname($name){
    $wedcode = $GLOBALS['wedcode'];
    $queryfire = "UPDATE wedding SET girl = '$name' WHERE wedding_code = '$wedcode'";
    if(mysqli_query($GLOBALS['con'],$queryfire)){
        echo "<script>alert('UPDATION SUCCESSFULL !!!');</script>";
    }else{
      echo "<script>alert('SOMETHING WENT WRONG !!!');</script>";
    }
 }

 


 function updategirladdress($name){
    $wedcode = $GLOBALS['wedcode'];
    $queryfire = "UPDATE wedding SET girl_address = '$name' WHERE wedding_code = '$wedcode'";
    if(mysqli_query($GLOBALS['con'],$queryfire)){
        echo "<script>alert('UPDATION SUCCESSFULL !!!');</script>";
    }else{
      echo "<script>alert('SOMETHING WENT WRONG !!!');</script>";
    }
 }


 


 function updategirlfather($name){
    $wedcode = $GLOBALS['wedcode'];
    $queryfire = "UPDATE wedding SET girl_father = '$name' WHERE wedding_code = '$wedcode'";
    if(mysqli_query($GLOBALS['con'],$queryfire)){
        echo "<script>alert('UPDATION SUCCESSFULL !!!');</script>";
    }else{
      echo "<script>alert('SOMETHING WENT WRONG !!!');</script>";
    }
 }



 


 function updategirlmother($name){
    $wedcode = $GLOBALS['wedcode'];
    $queryfire = "UPDATE wedding SET girl_mother = '$name' WHERE wedding_code = '$wedcode'";
    if(mysqli_query($GLOBALS['con'],$queryfire)){
        echo "<script>alert('UPDATION SUCCESSFULL !!!');</script>";
    }else{
      echo "<script>alert('SOMETHING WENT WRONG !!!');</script>";
    }
 }

 


 function updatebarat($name){
    $wedcode = $GLOBALS['wedcode'];
    $queryfire = "UPDATE wedding SET wedding_venue = '$name' WHERE wedding_code = '$wedcode'";
    if(mysqli_query($GLOBALS['con'],$queryfire)){
        echo "<script>alert('UPDATION SUCCESSFULL !!!');</script>";
    }else{
      echo "<script>alert('SOMETHING WENT WRONG !!!');</script>";
    }
 }
?>