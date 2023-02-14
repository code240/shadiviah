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
if(isset($_POST['administratorname'])){

include 'username_creater.php';
include 'vip_encode_decode.php';

$adminname =      $_POST['administratorname'];
$adminpasscode =  $_POST['administratorpasscode'];
$superpasscode =  $_POST['suppasscode'];
// echo $adminname;
$con=mysqli_connect('localhost','root','','shadiviah');
if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
}  
$queryfire = "select sp from target";
$getdata = mysqli_query($con,$queryfire);
while($result = mysqli_fetch_array($getdata)){
    $sp = $result['sp'];
}
$superpasscode = encode($superpasscode);
if($superpasscode == $sp){
    date_default_timezone_set('Asia/Kolkata');
    $date=date("d/m/y");
    $username = getusernameshort($adminname);
    // echo $username;    
    $adminpasscode = encode($adminpasscode);
    // echo $adminpasscode;
    $queryfire = "insert into administrator (name,username,date,passcode,deletestatus) values ('$adminname','$username','$date','$adminpasscode',0)";
    if(mysqli_query($con,$queryfire)){
        session_start();
        $_SESSION["recentlyregister"]=$username;
        echo "<script>alert('***ADMIN REGISTER SUCCESSFULLY***');</script>";
        header("refresh:3; url=../pannel/showadminusername.php");
    }
}else{
    echo "<script>alert('Supreme passcode dismatch');window.history.back();</script>";
}

}
else{
    header("location:../index.php");
}

?>