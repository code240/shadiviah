<?php
error_reporting(0);
if(!isset($_GET['wed'])){
  header('location:Invitation-Shadiviah');
}
if(isset($_GET['wed'])){
    $get_code = $_GET['wed'];
    
    $con=mysqli_connect('localhost','root','','shadiviah');

    if(mysqli_connect_errno()){
     $con=mysqli_connect('localhost','root','','shadiviah');
    } 
    $queryfire = "select * from wedding where wedding_code = '$get_code' and deletestatus = 0";
    $getresult = mysqli_query($con,$queryfire);
    $rowcount = mysqli_num_rows($getresult);
    if($rowcount==0){
         header('location:Invitation-Shadiviah');
         exit;
    }
    while($result = mysqli_fetch_array($getresult)){
        $boyname = $result['boy'];
        $girlname = $result['girl'];
        $mobile  = $result['mobile'];
        $weddingof = $result['weddingof'];
        $date = date_decode($result['barat_date']);
        
    }
    session_start();
    $_SESSION['extra'] = "null_for_unset";
    session_unset();
    $_SESSION['boy'] = $boyname;
    $_SESSION['girl'] = $girlname;
    $_SESSION['phone'] = $mobile;
    $_SESSION['wedscode'] = $get_code;
    $_SESSION['date'] = $date;
    if($weddingof=="boy"){
      $_SESSION['firstname'] = $boyname;
      $_SESSION['secondname'] = $girlname;
    }
    if($weddingof=="girl"){
        $_SESSION['firstname'] = $girlname;
        $_SESSION['secondname'] = $boyname;
    }
}

?>
























<?php

function date_decode($date){
  $date = explode("-",$date);
  $date[1] = (int)$date[1];
     
  if($date[1]==1){
      $m = "Jan";
  }
   
  if($date[1]==2){
      $m = "Feb";
  }
   
  if($date[1]==3){
      $m = "Mar";
  }
   
  if($date[1]==4){
      $m = "Apr";
  }
   
  if($date[1]==5){
      $m = "May";
  }
   
  if($date[1]==6){
      $m = "Jun";
  }
   
  if($date[1]==7){
      $m = "Jul";
  }
   
  if($date[1]==8){
      $m = "Aug";
  }
   
  if($date[1]==9){
      $m = "Sep";
  }
   
  if($date[1]==10){
      $m = "Oct";
  }
   
  if($date[1]==11){
      $m = "Nov";
  }
  if($date[1]==12){
      $m = "Dec";
  }
   $formated = $date[2]." ".$m." ".$date[0];
   return $formated;

}


?>

