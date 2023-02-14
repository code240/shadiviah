<?php
include "vip_encode_decode.php";
if(!isset($_POST['invite_name'])){
    header('location:Invitation-Shadiviah');
    exit;
}
session_start();
    
$family = 0;
if(isset($_POST['familystatus'])){
  $family = 1;
}
$person = $_POST['invite_name'];
$prsn = $person;
$ssn_person = ucfirst($person);
$inv_prsn = $person;

if($family == 0){
  $inv_prsn = $person;
  $encryption = encode($person);
  $boyname = $_SESSION['boy'];
  $girlname = $_SESSION['girl'];
  $mobile = $_SESSION['phone'];
  $wedcode = $_SESSION['wedscode'];
  $date = $_SESSION['date'];
  $_SESSION['invitestatus'] = $ssn_person;
  $pagename = encode_url($girlname,$boyname,$mobile);
  $link = "http://www.shadiviah.in/Wedding/".$pagename."?invite=".$encryption;
  $_SESSION['link'] = $link;
  $_SESSION['familystatus'] = $family;

} 
if($family == 1){
    $inv_prsn = $person." With Family";
    $ssn_person = $ssn_person." With Family";

    $encryption = encode($person."-ff");
    $boyname = $_SESSION['boy'];
    $girlname = $_SESSION['girl'];
    $mobile = $_SESSION['phone'];
    $wedcode = $_SESSION['wedscode'];
    $date = $_SESSION['date'];
    $_SESSION['invitestatus'] = $ssn_person;
    $pagename = encode_url($girlname,$boyname,$mobile);
    $link = "http://www.shadiviah.in/Wedding/".$pagename."?invite=".$encryption;
    $_SESSION['link'] = $link;
    $_SESSION['familystatus'] = $family;
 
} 
$pagename = invitation_insight();
 
?>






<?php
function invitation_insight(){
  $wedding_code_for_updation_insight =  $_SESSION['wedscode'];
  $con=mysqli_connect('localhost','root','','shadiviah');
  if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
  } 
  $queryfire = "select invitation_insight,pagename from wedding where wedding_code = '$wedding_code_for_updation_insight'";
  $getresult = mysqli_query($con,$queryfire);
  $row_num = mysqli_num_rows($getresult);
  if($row_num==1){
    while($result = mysqli_fetch_array($getresult)){
      $invite_insight = $result['invitation_insight'];
      $pagename = $result['pagename'];
    }
    $invite_insight = (int)$invite_insight;
    $invite_insight = $invite_insight+1;
    
    $queryfire = "update wedding set invitation_insight='$invite_insight' where wedding_code = '$wedding_code_for_updation_insight'";
    mysqli_query($con,$queryfire);
    mysqli_close($con);
    $pagename = $pagename.".php";
    return $pagename;
  }
}

?>















<?php
function encode_url($girlname,$boyname,$mobile){
	$n1 = $mobile[-1];
    $n2 = $mobile[-2];
	$n3 = $mobile[-3];
	$boyname = explode(' ',$boyname);
    $girlname = explode(' ',$girlname);
    $b = strtolower($boyname[0]);
    $g = strtolower($girlname[0]);
    $b = ucfirst($b);
    $g = ucfirst($g);  
    $url = $b."Weds".$g."_".$n1.$n2.$n3.".php";
    return $url;
}

?>