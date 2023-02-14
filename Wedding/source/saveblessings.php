
<h1 style="color:blue;">saved!!</h1>
<?php
 include 'filter.php';
 
 $deletestatus = 0;
 $pin = 0;
 $name = $_POST['name'];
 $name = namefilter($name);
 $mail = $_POST['email'];
 $blessto = $_POST['blessto'];
 $code = $_POST['code'];
 $message = $_POST['message'];
 $message = namefilter($message);
 
 $deletestatus = messagefilter($message);
 $deletestatus = (int)$deletestatus;
 if(!isset($_POST['email'])){
    header('location:../../Home-Shadiviah');
    exit;
 }
 
 $alpha = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','Z','V','U','Y');
 $r1 = rand(0,26);
 $r2 = rand(0,26);
 $r3 = rand(0,26);
 $r4 = rand(0,26);
 $r14 = rand(0,26);
 $r13 = rand(10000,99999);
 $r12 = rand(0,26);
 $r11 = rand(0,26);
 $r16 = rand(100000,999999);
 $r5 = rand(0,26);
 $r6 = rand(1124,9987);
 $blesscode = "#".$alpha[$r1].$r2.$alpha[$r3].$r16.$r2.$alpha[$r3].$r4.$alpha[$r5].$r6.$alpha[$r14].$alpha[$r12].$alpha[$r11].$r13;
//  echo $deletestatus;
if($deletestatus==2){
   $pin = 0;
}
if($deletestatus==0){
   $pin = 1;
}
if($deletestatus==1){
   $pin = 0;
}
// echo $pin."<br>";
// echo $deletestatus;

 $con=mysqli_connect('localhost','root','','shadiviah');
 if(mysqli_connect_errno()){
 $con=mysqli_connect('localhost','root','','shadiviah');
 }   

 $getpagename = "SELECT pagename FROM wedding WHERE wedding_code = '$code'";
 $mydata = mysqli_query($con,$getpagename);
 while($result = mysqli_fetch_array($mydata)){
     $pagename = $result['pagename'];
 }
  $pagelink = "../".$pagename.".php";
   $queryfire = "INSERT INTO bless (blesser_name,email,blessto,blesser_message,bless_code,wedding_code,deletestatus,pin) VALUES ('$name','$mail','$blessto','$message','$blesscode','$code',$deletestatus,$pin)";
   if(mysqli_query($con,$queryfire)){
     echo "<script>alert('Your Message Has Been Saved!!'); window.location.assign('$pagelink');</script>";
    }else{
    echo "<script>alert('SOMETHING WENT WRONG!! TRY AGAIN!!'); window.location.assign('$pagelink');</script>";
   }
  

?>