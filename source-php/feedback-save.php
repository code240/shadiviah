<?php
if(!isset($_POST['name'])){
    header('location:../Home-Shadiviah');
    exit;
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$con=mysqli_connect('localhost','root','','shadiviah');
$random1 = rand(10000,99999);
$alpha = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$r1 = rand(0,25);
$r2 = rand(0,25);
$r3 = rand(0,25);
$r4 = rand(0,25);
$r5 = rand(0,25);
$r6 = rand(0,25);

$code = $alpha[$r1].$alpha[$r2].$alpha[$r3].$alpha[$r4].$alpha[$r5].$alpha[$r6]."__".$random1;

if(mysqli_connect_errno()){
$con=mysqli_connect('localhost','root','','shadiviah');
} 
$queryfire = "insert into getintouch (code,name,email,message,deletestatus) values ('$code','$name','$email','$message',0)";
if(mysqli_query($con,$queryfire)){
echo "<script>alert('Message saved');window.location.assign('../Home-Shadiviah');</script>";


}
?>