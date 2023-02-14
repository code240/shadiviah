<?php
date_default_timezone_set('Asia/Kolkata');

$register_time=date("h:i");
$register_date=date("d/m/y");
session_start();
$weddingcode = $_SESSION['weddingcode'];

if(isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    if($_FILES['i1']['name']!=""){
        $name = $_FILES['i1']['name'];
        $tmpname = $_FILES['i1']['tmp_name'];
        $caption = $_POST['c1'];
        $folder = "../../wedding_images/".$name;
        
        move_uploaded_file($tmpname, $folder);
        $con=mysqli_connect('localhost','root','','shadiviah');
        if(mysqli_connect_errno()){
           $con=mysqli_connect('localhost','root','','shadiviah');
        }
        $queryfire = "insert into wedding_images (image,caption,feature,weddingcode,register_date,register_time,deletestatus) values ('$name','$caption',1,'$weddingcode','$register_date','$register_time',0)";
        mysqli_query($con,$queryfire);
    }
    if($_FILES['i2']['name']!=""){
        $name = $_FILES['i2']['name'];
        $tmpname = $_FILES['i2']['tmp_name'];
        $caption = $_POST['c2'];
        $folder = "../../wedding_images/".$name;
        
        move_uploaded_file($tmpname, $folder);
        $con=mysqli_connect('localhost','root','','shadiviah');
        if(mysqli_connect_errno()){
           $con=mysqli_connect('localhost','root','','shadiviah');
        }
        $queryfire = "insert into wedding_images (image,caption,feature,weddingcode,register_date,register_time) values ('$name','$caption',1,'$weddingcode','$register_date','$register_time')";
        mysqli_query($con,$queryfire);
    }
    if($_FILES['i3']['name']!=""){
        $name = $_FILES['i3']['name'];
        $tmpname = $_FILES['i3']['tmp_name'];
        $caption = $_POST['c3'];
        $folder = "../../wedding_images/".$name;
        
        move_uploaded_file($tmpname, $folder);
        $con=mysqli_connect('localhost','root','','shadiviah');
        if(mysqli_connect_errno()){
           $con=mysqli_connect('localhost','root','','shadiviah');
        }
        $queryfire = "insert into wedding_images (image,caption,feature,weddingcode,register_date,register_time) values ('$name','$caption',1,'$weddingcode','$register_date','$register_time')";
        mysqli_query($con,$queryfire);
    }
    if($_FILES['i4']['name']!=""){
        $name = $_FILES['i4']['name'];
        $tmpname = $_FILES['i4']['tmp_name'];
        $caption = $_POST['c4'];
        $folder = "../../wedding_images/".$name;
        
        move_uploaded_file($tmpname, $folder);
        $con=mysqli_connect('localhost','root','','shadiviah');
        if(mysqli_connect_errno()){
           $con=mysqli_connect('localhost','root','','shadiviah');
        }
        $queryfire = "insert into wedding_images (image,caption,feature,weddingcode,register_date,register_time) values ('$name','$caption',1,'$weddingcode','$register_date','$register_time')";
        mysqli_query($con,$queryfire);
    }

}
if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    header('location:../../Home-Shadiviah'); 
 }
header('location:../RSVP-Image');
?>