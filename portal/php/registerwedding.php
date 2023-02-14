<?php
error_reporting(0);
include 'vip_encode_decode.php';
include 'weddingcodegenerator.php';
date_default_timezone_set('Asia/Kolkata');

$register_time=date("h:i");
$register_date=date("d/m/y");

if(isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
  if(isset($_POST['boyname'])){
    
    $boyname = strtolower($_POST['boyname']);
    $girlname = strtolower($_POST['girlname']);
    $boyfather = strtolower($_POST['boyfather']);
    $girlfather = strtolower($_POST['girlfather']);
    $girlmother = strtolower($_POST['girlmother']);
    $boymother = strtolower($_POST['boymother']);
    $boyaddress = ucfirst($_POST['boyaddress']);
    $girladdress = ucfirst($_POST['girladdress']);
    $lagandate = strtolower($_POST['lagandate']);
    $baratdate = strtolower($_POST['baratdate']);
    $weddingvenue = ucfirst($_POST['weddingvenue']);
    $programaddress = ucfirst($_POST['programaddress']);
    $theme = strtolower($_POST['theme']);
    $phonenumber = $_POST['phonenumber'];
    $weddingof = strtolower($_POST['weddingof']);

    $weddingcode = createcode($boyname,$girlname);
    
    $mediatorusername = decode($_COOKIE['SHADIVIAH_MEDIATOR']);
    mediator_perfomance_saver();
    $con=mysqli_connect('localhost','root','','shadiviah');
    if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
   
    }
        

  // this is the code to make url copied from ready dot php
  $mobile = $phonenumber;
  if($weddingof=="boy"){
    $bn=$boyname;
    $gn=$girlname;
  }
  if($weddingof=="girl"){
    $bn=$girlname;
    $gn=$boyname;
  }
  $n1 = $mobile[-1];
  $n2 = $mobile[-2];
  $n3 = $mobile[-3];
  $bn = explode(' ',$bn);
  $gn = explode(' ',$gn);
  $b = strtolower($bn[0]);
  $g = strtolower($gn[0]);
  $b = ucfirst($b);
  $g = ucfirst($g);  
  $abcd = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','Z','Z');
  $ra = rand(0,26);
  $url = "../../Wedding/".$b."weds".$g."_".$abcd[$ra].$n1.$n2.$n3.".php";
  $pagename = $b."weds".$g."_".$abcd[$ra].$n1.$n2.$n3;
  // end here 


    $queryfire = "insert into wedding (weddingof,boy,girl,boy_father,boy_mother,girl_father,girl_mother,boy_address,girl_address,lagan_date,barat_date,wedding_venue,program_address,mobile,theme,wedding_code,registerby,public,insight,invitation_insight,deletestatus,register_date,register_time,pagename,user_power) values ('$weddingof','$boyname','$girlname','$boyfather','$boymother','$girlfather','$girlmother','$boyaddress','$girladdress','$lagandate','$baratdate','$weddingvenue','$programaddress','$phonenumber','$theme','$weddingcode','$mediatorusername',1,0,0,0,'$register_date','$register_time','$pagename',0)";
    
    if(mysqli_query($con,$queryfire)){
        session_start();
        $_SESSION['test_variable'] ="test";
        session_unset();
        $_SESSION['weddingcode'] = $weddingcode;
        $_SESSION['mobile'] = $phonenumber;
        $_SESSION['boyname'] = $boyname;
        $_SESSION['girlname'] = $girlname;
       
        mysqli_close($con);
       
        header('location:../Couple-Image');
        $myfile = fopen("$url", "w");
        fwrite($myfile, "<h1>THIS PAGE IS UNDER PROCESS. IT WILL ACTIVE WITH IN 2-3 WORKING DAYS.</h1>");
        fclose($myfile);
    }
  }
  if(!isset($_POST['boyname'])){
    header('location:../../Home-Shadiviah'); 
    exit;
  }
}
if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
   header('location:../../Home-Shadiviah'); 
}
?>



<?php

function mediator_perfomance_saver(){
  $con=mysqli_connect('localhost','root','','shadiviah');
  if(mysqli_connect_errno()){
  $con=mysqli_connect('localhost','root','','shadiviah');
  }
  $mediator_username = decode($_COOKIE['SHADIVIAH_MEDIATOR']);
  $queryfire = "select totalactionperform from mediators where username='$mediator_username'";
  $get = mysqli_query($con,$queryfire);
  while($result = mysqli_fetch_array($get)){
    $action = $result['totalactionperform'];
  }
  $action = (int)$action;
  $action = $action+1;
  // echo $action;
  $queryfire = "update mediators set totalactionperform = $action where username = '$mediator_username'";
  mysqli_query($con,$queryfire);
  mysqli_close($con);
  
}

?>