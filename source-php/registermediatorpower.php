
<html>
<head>

<style>
    body{
        background:linear-gradient(30deg, #0984e3,#55efc4);
    }
    div{
       
        margin-top:15vw;
    }
    div img{
        height:15vw;
        width:15vw;
    }
@media screen and (max-width:1000px)
{
    body{
        background:linear-gradient(30deg, #0984e3,#55efc4);
    }
    div{
       
        margin-top:50vw;
    }
    div img{
        height:40vw;
        width:40vw;
    }
}
</style>
</head>
<body>
    <div>
       <center> <img src="../site_image/load.gif" alt="Loading_SttarVipin"></center>
    </div>
</body>
</html>



<?php 
if(isset($_POST["adminname"])){
include 'username_creater.php';
include 'vip_encode_decode.php';
$mediatorname =     $_POST["adminname"]; 
$mediatorname  =strtolower($mediatorname); 
$shopname =         $_POST["shopname"];
$shopname = strtolower($shopname); 
$address =          $_POST["shopaddress"];
$address = strtolower($address); 
$mobileone =        $_POST["mobilenumber"];
$mobiletwo =        $_POST["mobiletwo"];
$email =            $_POST["email"];
$email = strtolower($email);
$imagename =        $_FILES["image"]["name"];
$tempimagename =    $_FILES["image"]["tmp_name"];
$passcode =         $_POST["passcode"];
$confirmpasscode =  $_POST["passcodeconfirm"];
if($passcode!==$confirmpasscode){
    echo "<script>alert('Passcode dismatch');window.history.back();</script>";
    exit;
}
$folder = "../profiles/".$imagename;
$uploadstatus = move_uploaded_file($tempimagename,$folder);
if($uploadstatus){
date_default_timezone_set('Asia/Kolkata');
$date=date("d/m/y");
$passcode = encode($passcode);
$getcookie = $_COOKIE['Shadiviah_Login'];
$registerby = decode($getcookie);
// echo $passcode;
$username = getusername($mediatorname);
$con=mysqli_connect('localhost','root','','shadiviah');
if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
}  
$queryfire = "insert into mediators (name,username,shopname,address,mobileone,mobiletwo,email,image,passcode,dateofregister,totalactionperform,deletestatus,registerby,pay_upto) values ('$mediatorname','$username','$shopname','$address','$mobileone','$mobiletwo','$email','$imagename','$passcode','$date',0,0,'$registerby',0)";
if(mysqli_query($con , $queryfire)){
    echo "<script>alert('***MEDIATOR REGISTER SUCCESSFULLY***');</script>";
    header("refresh:3; url=../pannel/pannel.php");
}
}
}
else{
    header("location:../index.php");

}

?>