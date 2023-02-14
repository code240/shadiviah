<?php
  include '../vip_encode_decode.php';
  if(isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
   if(isset($_FILES['file'])){
    $get_image_name = $_FILES['file']['name'];
    $get_image_tmp_name = $_FILES['file']['tmp_name'];
    $folder = "../../profiles/".$get_image_name;
    if(move_uploaded_file($get_image_tmp_name,$folder)){
    $con=mysqli_connect('localhost','root','','shadiviah');
    if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
    } 
    $username = decode($_COOKIE['SHADIVIAH_MEDIATOR']);
    $queryfire = "select image from mediators where username='$username'";
    $getresult = mysqli_query($con,$queryfire);
    while($result = mysqli_fetch_array($getresult)){
        $old_image = $result['image'];
    }
    echo $old_image;
    $queryfire = "select image from mediators where username != '$username'";
    $getresult = mysqli_query($con,$queryfire);
    $i=1;
    $wants = 0;
    while($result = mysqli_fetch_array($getresult)){
        $image_array[$i] = $result['image'];
        if($image_array[$i] == $old_image){
            $wants = 1;
        }
        $i++;
    }

    if($wants==0){
       unlink('../../profiles/'.$old_image);
    }
    $queryfire = "update mediators set image = '$get_image_name' where username = '$username'";
   
    if(mysqli_query($con ,$queryfire)){
        echo "<script>alert('CHANGE SUCCESSFULLY!!!');window.location.assign('../../Portal/Mediator-Access');</script>";
        exit;
    }
}
  }
  if(!isset($_FILES['file'])){
    header('location:../../Home-Shadiviah');
     exit;
   }
}
  if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
      header('location:../../Home-Shadiviah');
      exit;
  }
?>