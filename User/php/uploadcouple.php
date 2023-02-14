<?php
error_reporting(0);

include 'vip_encode_decode.php';
include 'name_generator.php';
include 'cookie_check.php';
if(!isset($_FILES['i1'])){
    header('location:../../Signin');
    exit;
  }
  if(!isset($_POST['c1'])){
    header('location:../../Signin');
    exit;
  }
date_default_timezone_set('Asia/Kolkata');
$caption = $_POST['c1'];

$register_time=date("h:i");
$register_date=date("d/m/y");
$imagename = $_FILES['i1']['name'];
$imageTempname = $_FILES['i1']['tmp_name'];
$con=mysqli_connect('localhost','root','','shadiviah');
 if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
 }

$wedcode = decode($_COOKIE['shadiviah_family']);
$queryfire = "select * from wedding where wedding_code = '$wedcode'";
$getresult = mysqli_query($con,$queryfire);
$rowcount = mysqli_num_rows($getresult);
if($rowcount==0){
    echo "<script>alert('Invalid wedding code');window.location.assign('../../User/Pannel');</script>";
}
if($rowcount>1){
    echo "<script>alert('Something Went Wrong');window.location.assign('../../User/Pannel');</script>";
}
if($rowcount==1){
    $queryfire = "SELECT * from wedding_images where weddingcode = '$wedcode' AND (feature=1 OR feature=2) AND deletestatus=0";
    $getresult = mysqli_query($con,$queryfire);
    $rowcount = mysqli_num_rows($getresult);
    if($rowcount<15){
        $folder = "../../wedding_images/".$imagename;
        if(move_uploaded_file($imageTempname,$folder)){
            $newname = getnewname($imagename);
            $filePath = '../../wedding_images/'.$imagename;    
            $destinationFilePath = '../../wedding_images/'.$newname;
            if(!rename($filePath, $destinationFilePath)){
            $queryfire = "insert into wedding_images (image,caption,feature,weddingcode,register_date,register_time,deletestatus) values ('$imagename','$caption',1,'$wedcode','$register_date','$register_time',0)";
            }else{
            $queryfire = "insert into wedding_images (image,caption,feature,weddingcode,register_date,register_time,deletestatus) values ('$newname','$caption',1,'$wedcode','$register_date','$register_time',0)";
            }
            mysqli_query($con,$queryfire);
            echo "<script>alert('Image Uploadation Successfully!!');window.location.assign('../../User/Pannel');</script>";
            
            
        }
       
    }
    if($rowcount==15){
        echo "<script>alert('Maximum limit reached for Featured image (15)');window.location.assign('../../User/Pannel');</script>";
   }   
   if($rowcount>15){
       echo "<script>alert('Max value already crossed (15)');window.location.assign('../../User/Pannel');</script>";
   } 
    
}

?>