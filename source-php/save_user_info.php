<?php
include 'vip_encode_decode.php';
if(!isset($_POST['name'])){
    header('location:../Signin');
}
if($_POST['email']=="" || $_POST['mobile']==""){
    header('location:../Signin');
    exit;
}
session_start();
$con=mysqli_connect('localhost','root','','shadiviah');
if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
} 
$mobile = $_POST['mobile'];
$queryfire = "SELECT * FROM users_info WHERE mobile = '$mobile'";
$get_data = mysqli_query($con,$queryfire);
$get_row = mysqli_num_rows($get_data);
if($get_row>0){
    $_SESSION['note'] = "MobileError";
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['email_two'] = $_POST['email_two'];
    $_SESSION['mobile'] = $_POST['mobile'];
    $_SESSION['name'] = $_POST['name'];

    echo '<script>alert("Mobile Number Already Registered"); window.location.assign("../info"); </script>';
    mysqli_close($con);
    exit;
}


$email = strtolower($_POST['email']);
$queryfire = "SELECT * FROM users_info WHERE email = '$email'";
$get_data = mysqli_query($con,$queryfire);
$get_row = mysqli_num_rows($get_data);
if($get_row>0){
    $_SESSION['note'] = "EmailError";
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['email_two'] = $_POST['email_two'];
    $_SESSION['mobile'] = $_POST['mobile'];
    $_SESSION['name'] = $_POST['name'];
    echo '<script>alert("Email Already Registered"); window.location.assign("../info"); </script>';
    mysqli_close($con);
    exit;
}

$mobi_len = strlen($_POST['mobile']);

if($mobi_len<10){
    $_SESSION['note'] = "ShortError";
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['email_two'] = $_POST['email_two'];
    $_SESSION['mobile'] = $_POST['mobile'];
    $_SESSION['name'] = $_POST['name'];
    echo '<script>alert("Invalid Phone Number"); window.location.assign("../info"); </script>';
    mysqli_close($con);
    exit;
}

if($mobi_len>10){
    $_SESSION['note'] = "LongError";
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['email_two'] = $_POST['email_two'];
    $_SESSION['mobile'] = $_POST['mobile'];
    $_SESSION['name'] = $_POST['name'];
    echo '<script>alert("Invalid Phone Number"); window.location.assign("../info"); </script>';
    mysqli_close($con);
    exit;
}
$wedcode = $_SESSION['wedcode'];

$queryfire = "SELECT * FROM users_info WHERE wedding_code='$wedcode' AND deletestatus = 1";
$get_run = mysqli_query($con,$queryfire);
$row_run = mysqli_num_rows($get_run);
if($row_run>0){
    $_SESSION['note'] = "SuspendError";
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['email_two'] = $_POST['email_two'];
    $_SESSION['mobile'] = $_POST['mobile'];
    $_SESSION['name'] = $_POST['name'];
    echo '<script>alert("May be Your Account is Suspended or May be its a technical fault. But You can\'t Login Now"); window.location.assign("../info"); </script>';
    mysqli_close($con);
    exit;
}

$name = $_POST['name'];
$email = strtolower($_POST['email']);
$email_two = strtolower($_POST['email_two']);
$password = encode($_POST['password']);
$mobile = $_POST['mobile'];
$wedcode = $_SESSION['wedcode'];

$queryfire = "INSERT INTO users_info (user_name,email,recovery_email,passcode,wedding_code,mobile,power,deletestatus) VALUES ('$name','$email','$email_two','$password','$wedcode','$mobile',1,0)";
if(mysqli_query($con,$queryfire)){
    $cookie_name = "shadiviah_family";
    $cookie_value = encode($wedcode);
    setcookie($cookie_name, $cookie_value, time() + (3600*24*90), "/");
    header("location:../User/Pannel");
    session_unset();
    session_destroy();
    mysqli_close($con);
    exit;
}
if(!mysqli_query($con,$queryfire)){
    echo "<h1>SomeThing Went Wrong</h1>";
    header( "refresh:3;url=../info" );
}
?>