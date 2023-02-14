<?php
error_reporting(0);

include 'php/cookie_check.php';
include 'php/vip_encode_decode.php';
$con=mysqli_connect('localhost','root','','shadiviah');

if(mysqli_connect_errno()){
$con=mysqli_connect('localhost','root','','shadiviah');
}  
$wedcode = decode($_COOKIE['shadiviah_family']);
$queryfire = "SELECT * FROM bless WHERE (wedding_code = 'ALL' OR wedding_code = '$wedcode') AND deletestatus = 0";
$mydata = mysqli_query($con,$queryfire);
$s=0;
while($result = mysqli_fetch_array($mydata)){
   $message[$s] = $result['blesser_message'];
   $name[$s] = $result['blesser_name'];
   $email[$s] = $result['email'];
   $blesscode[$s] = $result['bless_code'];
   $blessto[$s] = $result['blessto'];
   $pin[$s] = $result['pin'];
   if($pin[$s]==1){
       $pin_btn[$s] = '<button class="btn btn-secondary" onclick="unpin(\''.$blesscode[$s].'\');">Unpin </button>';
       if($blesscode[$s]=="BLESS"){
        $pin_btn[$s] = '<button class="btn btn-secondary" onclick="alert(\'Cannot Unpin This\');">Unpin </button>';
       }
   }
   if($pin[$s]==0){
    $pin_btn[$s] = '<button class="btn btn-success" onclick="pin(\''.$blesscode[$s].'\');"> Pin... </button>';
   }
   $num[$s] = $s+1;
   $s++;
}


$couplequery = "SELECT * FROM wedding WHERE wedding_code = '$wedcode'";
$getdata = mysqli_query($con,$couplequery);
while($result=mysqli_fetch_array($getdata)){
    $weddingof = $result['weddingof'];
    $boy = $result['boy'];
    $girl = $result['girl'];
}
if($weddingof=="girl"){
    $firstname = $girl;
    $secondname = $boy;
}
if($weddingof=="boy"){
    $firstname = $boy;
    $secondname = $girl;
}

?>