<?php
error_reporting(0);

include 'vip_encode_decode.php';
if(!$_COOKIE['shadiviah_family']){
   header('location:../../Signin');
   exit;
}

$con=mysqli_connect('localhost','root','','shadiviah');
if(mysqli_connect_errno()){
$con=mysqli_connect('localhost','root','','shadiviah');
}  
$deleteid =  $_POST['id'];
$img_name = $_POST['imgname'];
$deleteid = (int)$deleteid;
$user = decode($_COOKIE['shadiviah_family']);
$queryfire = "UPDATE wedding_images set deletestatus = 1 Where id = $deleteid";
if(mysqli_query($con,$queryfire)){

   $filePath = '../../wedding_images/'.$img_name;    
   $destinationFilePath = '../../deleted_img/'.$img_name;
   if( !rename($filePath, $destinationFilePath) ) {      
       echo "<script>alert('Image Successfully Deleted!!!!'); window.location.assign('../../User/Pannel')</script>";  
   }  
   else {  
       echo "<script>alert('Image Successfully Deleted!!'); window.location.assign('../../User/Pannel')</script>";  
   } 
   
}else{
    echo "<script>alert('Something went wrong. May be Site is too busy!! Please Try again...'); window.location.assign('../../User/Pannel')</script>";
}

?>