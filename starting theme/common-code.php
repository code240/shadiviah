
<?php
 $current_file = basename($_SERVER['PHP_SELF']); 
 $current_file = str_replace(".php","",$current_file);
 
 $con=mysqli_connect('localhost','root','','shadiviah');
 if(mysqli_connect_errno()){ 
  $con=mysqli_connect('localhost','root','','shadiviah');
 }
 
 $queryfire = "select * from config where pagename = '$current_file'";
 $getdata = mysqli_query($con,$queryfire);
 $rowcount = mysqli_num_rows($getdata);
 if($rowcount==0){
     exit;
 }
 if($rowcount>1){
     echo "<h1>404 FORBIDDEN ERROR</h1>";
     exit;
 }
 while($result = mysqli_fetch_array($getdata)){
     $wedcode = $result['wedding_code'];
     $frame_location = $result['location_url'];
 }
 $queryfire = "SELECT * FROM wedding WHERE wedding_code = '$wedcode' AND deletestatus = 0";
 $getdata = mysqli_query($con,$queryfire);
 while($result = mysqli_fetch_array($getdata)){
    $boy = $result['boy'];
    $girl = $result['girl'];
    $boyfather = $result['boy_father'];
    $girlfather = $result['girl_father'];
    $boymother = $result['boy_mother'];
    $girlmother = $result['girl_mother'];
    $girladdress= $result['girl_address'];
    $boyaddress = $result['boy_address'];
    $weddingvenue = $result['wedding_venue'];
    $programaddress = $result['program_address'];
    $mobile = $result['mobile'];
    $theme = $result['theme'];
    $insight = $result['insight'];
    $lagandate = $result['lagan_date'];
    $baratdate = $result['barat_date'];
    $weddingof = $result['weddingof'];
 }
 $insight = (int)$insight;
 $insight = $insight+1;
 $updatequeryfire = "UPDATE wedding SET insight = $insight WHERE wedding_code = '$wedcode'";
 mysqli_query($con,$updatequeryfire);

 
//  GET FAMILY PHOTOS FROM WEDDING IMAGES    //

$imagequery = "SELECT * from wedding_images WHERE weddingcode = '$wedcode' AND feature = 0";
$getimage = mysqli_query($con,$imagequery);
$family_image_row_count = mysqli_num_rows($getimage);
if($family_image_row_count>0){
    $fam=0;
    while($result = mysqli_fetch_array($getimage)){
       $family_image[$fam] = $result['image'];
       $caption_family_image[$fam] = $result['caption'];
       $fam++;
    }

}
// GET COUPLES PHOTOS FROM WEDDING IMAGES


$imagequery = "SELECT * from wedding_images WHERE weddingcode = '$wedcode' AND feature =1 or feature = 2";
$getimage = mysqli_query($con,$imagequery);
$couples_image_row_count = mysqli_num_rows($getimage);
if($couples_image_row_count>0){
    $coup=0;
    while($result = mysqli_fetch_array($getimage)){
       $couple_image[$coup] = $result['image'];
       $caption_couple_image[$coup] = $result['caption'];
       $coup++;
    }
   
    //create random list
    $no_repeat = [];
    $x=0;
    while(1){
        $r = rand(0,$coup-1);
        if(!in_array($r,$no_repeat)){
            $couple_image_random[$r] = $couple_image[$x];
            $couple_caption_random[$r] = $caption_couple_image[$x];
            array_push($no_repeat,$r);
            $x++;
        }
        $array_size = count($no_repeat);
        if($array_size == $coup){
            break;
        }
    }
    $num_img = $x;
}

$blessquery = "SELECT * from bless where deletestatus = 0 AND  wedding_code = '$wedcode' OR wedding_code = 'All'";
$getbless = mysqli_query($con,$blessquery);
$bless_int = 0;
while($result = mysqli_fetch_array($getbless)){
     $blessername[$bless_int] = $result['name'];
     $blessemail[$bless_int] = $result['email'];
     $blessto[$bless_int] = $result['blessto'];
     $message[$bless_int] = $result['message'];
     $blesscode[$bless_int] = $result['bless_code'];
     if($blesscode[$bless_int]=="BLESS"){
         $bless_dp[$bless_int] = "Shadiviah.jpg";
     }else{
        $bless_dp[$bless_int] = "Nophoto.jpg";
     }
     $bless_int++;
}



  //create random list
  $no_bless_repeat = [];
  $x=0;
  while(1){
      $r = rand(0,$bless_int-1);
      if(!in_array($r,$no_bless_repeat)){
          $bless_message_random[$r] = $message[$x]; 
          $bless_name_random[$r] = $blessername[$x];
          $bless_blessto_random[$r] = $blessto[$x];
          $bless_email_random[$r] = $blessemail[$x];
          $bless_image_random[$r] = $bless_dp[$x];
          array_push($no_bless_repeat,$r);
          $x++;
      }
      $array_size = count($no_bless_repeat);
      if($array_size == $bless_int){
          break;
      }
  }
  $num_bless = $x;

?>















