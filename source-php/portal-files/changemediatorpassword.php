<?php
  include '../vip_encode_decode.php';
  if(isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
   if(isset($_POST['oldpasscode'])){
    $username = decode($_COOKIE['SHADIVIAH_MEDIATOR']);
    $getold = $_POST['oldpasscode'];
    $getold = encode($getold);
    $getnew = $_POST['newpasscode'];
    
    $confirmnew = $_POST['newpasscodetwo'];
    $con=mysqli_connect('localhost','root','','shadiviah');
    if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
    } 
    $queryfire = "select passcode from mediators where username='$username'";
    $getresult = mysqli_query($con , $queryfire);
    $rowcount = mysqli_num_rows($getresult);
    if($rowcount==0){
        echo "bhai";
        echo "<script>alert('Something Went Wrong!!');window.history.back();</script>";
        exit;
    }  
    if($rowcount>1){
        echo "<script>alert('Something Went Wrong!!');window.history.back();</script>";
        exit;
    }  
    while($result = mysqli_fetch_array($getresult)){
        $db_passcode = $result['passcode'];
    }
    if($db_passcode != $getold){
        echo "<script>alert('WRONG OLD PASSWORD!!');window.history.back();</script>";
        exit;     
    }
    if($getnew != $confirmnew){
        echo "<script>alert('NEW PASSCODE DISMATCH');window.history.back();</script>";
        exit;
    }  
    $getnew = encode($getnew);
    $queryfire = "update mediators set passcode='$getnew' where username = '$username'";
    if(mysqli_query($con,$queryfire)){
        echo "<script>alert('CHANGE SUCCESSFULLY!!!');window.location.assign('../../Portal/Mediator-Access');</script>";
        // header('location:../../Portal/Mediator-Access');
        exit;
    }
    //  header('location:../../Portal/Mediator-Access');
    //  exit;
   }
   if(!isset($_POST['oldpasscode'])){
    header('location:../../Home-Shadiviah');
     exit;
   }

  }
  if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
      header('location:../../Home-Shadiviah');
      exit;
  }
?>