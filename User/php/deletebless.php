<?php
error_reporting(0);

include 'cookie_check.php';
$code = $_POST['code'];
$con=mysqli_connect('localhost','root','','shadiviah');

if(mysqli_connect_errno()){
$con=mysqli_connect('localhost','root','','shadiviah');
}  

if($code=="BLESS"){
  echo "<script>alert('Cannot Delete This!! Try Again!!');window.location.assign('../../User/Blessings');</script>";
  exit;
}

$queryfire = "UPDATE bless SET deletestatus=1 WHERE bless_code = '$code'";
if(mysqli_query($con,$queryfire)){
  echo "<script>window.location.assign('../../User/Blessings');</script>";
}else{
  echo "<script>alert('Something Went Wrong!! Try Again!!');window.location.assign('../../User/Blessings');</script>";

}
?>