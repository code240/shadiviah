<?php
include 'check_cookie.php';
include 'name_generator.php';
session_start();
if(!isset($_FILES['i1'])){
  header('location:../Mediator-Acces');
  session_unset();
  exit;
}
if(!isset($_POST['c1'])){
  header('location:../Mediator-Acces');
  session_unset();
  exit;
}
date_default_timezone_set('Asia/Kolkata');

$register_time=date("h:i");
$register_date=date("d/m/y");

$caption = $_POST['c1'];
$imagename = $_FILES['i1']['name'];
$imageTempname = $_FILES['i1']['tmp_name'];
$con=mysqli_connect('localhost','root','','shadiviah');
 if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
 }

$wedcode = $_SESSION['wedcode'];
$queryfire = "select * from wedding where wedding_code = '$wedcode'";
$getresult = mysqli_query($con,$queryfire);
$rowcount = mysqli_num_rows($getresult);
if($rowcount==0){
    echo "<script>alert('Invalid wedding code');window.location.assign('../../Portal/Mediator-Access');</script>";
}
if($rowcount>1){
    echo "<script>alert('Something Went Wrong');window.location.assign('../../Portal/Mediator-Access');</script>";
}
if($rowcount==1){
    $queryfire = "SELECT * from wedding_images where weddingcode = '$wedcode' AND feature=0 AND deletestatus=0";
    $getresult = mysqli_query($con,$queryfire);
    $rowcount = mysqli_num_rows($getresult);
    if($rowcount<4){
        $folder = "../../wedding_images/".$imagename;
        if(move_uploaded_file($imageTempname,$folder)){
            $newname = getnewfamilyname($imagename);
            $filePath = '../../wedding_images/'.$imagename;    
            $destinationFilePath = '../../wedding_images/'.$newname;
            if(!rename($filePath, $destinationFilePath)){
            $queryfire = "insert into wedding_images (image,caption,feature,weddingcode,register_date,register_time,deletestatus) values ('$imagename','$caption',0,'$wedcode','$register_date','$register_time',0)";
            }else{
              $queryfire = "insert into wedding_images (image,caption,feature,weddingcode,register_date,register_time,deletestatus) values ('$newname','$caption',0,'$wedcode','$register_date','$register_time',0)";
            }
            mysqli_query($con,$queryfire);
            echo "<script>alert('Image Uploadation Successfully!!');window.location.assign('../../Portal/Mediator-Access');</script>";
            
        }
       
    }
    if($rowcount==4){
        echo "<script>alert('Images for RSVP got reached maximum value 4');window.location.assign('../../Portal/Mediator-Access');</script>";
   }   
   if($rowcount>4){
       echo "<script>alert('Images for RSVP already crossed their limit!');window.location.assign('../../Portal/Mediator-Access');</script>";
   } 
    
}
session_unset();
?>