<?php
error_reporting(0);

include 'cookie_check.php';
$code = $_POST['code'];
$con=mysqli_connect('localhost','root','','shadiviah');

if(mysqli_connect_errno()){
$con=mysqli_connect('localhost','root','','shadiviah');
}  

$queryfire = "UPDATE bless SET pin=1 WHERE bless_code = '$code'";
if(mysqli_query($con,$queryfire)){
  echo "<script>window.location.assign('../../User/Blessings');</script>";
}else{
  echo "<script>alert('Something Went Wrong!! Try Again!!');window.location.assign('../../User/Blessings');</script>";

}
?>