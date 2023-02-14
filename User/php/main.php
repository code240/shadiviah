<?php
  error_reporting(0);

  include 'vip_encode_decode.php';

  if(isset($_COOKIE['shadiviah_family'])){
    
    $account = decode($_COOKIE['shadiviah_family']);
    $con=mysqli_connect('localhost','root','','shadiviah');
    if(mysqli_connect_errno()){
       $con = mysqli_connect('localhost','root','','shadiviah');
    }   
    
    $queryfire = "SELECT * FROM wedding WHERE wedding_code = '$account'";
    $get_wedding_data = mysqli_query($con,$queryfire);
    $row = mysqli_num_rows($get_wedding_data);
    if($row==0){
        echo "<script>alert('Something Went Wrong!! Try Again');window.location.assign('https://shadiviah.in/Home-Shadiviah');</script>";
        mysqli_close($con);
        exit;
    }
    if($row>1){
        echo "<script>alert('Something Went Wrong!! Try Again');window.location.assign('https://shadiviah.in/Home-Shadiviah');</script>";
        mysqli_close($con);
        exit;
    }
    // $i=0;
    while($result=mysqli_fetch_array($get_wedding_data)){
        $boy = $result['boy'];
        $girl = $result['girl'];
        $boyfather = $result['boy_father'];
        $girlfather = $result['girl_father'];
        $boymother = $result['boy_mother'];
        $girlmother = $result['girl_mother'];
        $girladdress= $result['girl_address'];
        $boyaddress = $result['boy_address'];
        $barataddress = $result['wedding_venue'];
        $programaddress = $result['program_address'];
        $mobile = $result['mobile'];
        $theme = $result['theme'];
        $registerby = $result['registerby'];
        $insight = $result['insight'];
        $lagandate = $result['lagan_date'];
        $decode_lagandate  = decode_date_ymd($lagandate);
        $baratdate = $result['barat_date'];
        $decode_baratdate  = decode_date_ymd($baratdate);
        $weddingof = $result['weddingof'];
    }
    $ifconfig = 0;
    $location_url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d441434.18477089674!2d77.15905321697177!3d28.4072351007647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1613843284120!5m2!1sen!2sin";
    mysqli_free_result($get_wedding_data);
    $newquery = "SELECT * FROM config WHERE wedding_code = '$account'";
    $get_config_data = mysqli_query($con,$newquery);
    $getconfigrow = mysqli_num_rows($get_config_data);

    if($getconfigrow==0){
       $ifconfig = 0;
    }

    if($getconfigrow>1){
        echo "<script>alert('Something Went Wrong!! Try Again');window.location.assign('https://shadiviah.in/Home-Shadiviah');</script>";
        mysqli_close($con);
        exit;
    }

    if($getconfigrow==1){
        while($resultconfig = mysqli_fetch_array($get_config_data)){
            $location_url = $resultconfig['location_url'];
            $mypage = $resultconfig['pagename'];
        }
    
    }
    mysqli_free_result($get_config_data);

    $imgquery = "SELECT * FROM wedding_images WHERE (feature = 1 or feature = 2) AND (deletestatus = 0) AND weddingcode = '$account'";
    $getcoupleimagedata = mysqli_query($con,$imgquery);
    $couple_image_rows = mysqli_num_rows($getcoupleimagedata);
    $i = 0;
    if($couple_image_rows!=0){
        while($result = mysqli_fetch_array($getcoupleimagedata)){
            $couple_image[$i] = $result['image'];
            $couple_image_id[$i] = $result['id'];
            $couple_caption[$i] = $result['caption'];
            $i++;
        }
        if($i!=0){
        $r = rand(0,$i-1);
        $img = $couple_image[$r];
        $front_img = "../wedding_images/".$img;
        $front_cap = $couple_caption[$r];
        }
    }
    if($couple_image_rows==0){
        $front_img = "../site_image/no_image_upload.jpg";
        $front_cap = "";
    }

    $famquery = "SELECT * FROM wedding_images WHERE feature = 0 AND deletestatus = 0 AND weddingcode = '$account'";
    $getfamimagedata = mysqli_query($con,$famquery);
    $fam_img_row = mysqli_num_rows($getfamimagedata);
    $j=0;
    if($fam_img_row!=0){
        while($result= mysqli_fetch_array($getfamimagedata)){
            $family_image[$j] = $result['image'];
            $family_caption[$j] = $result['caption'];
            $familyid[$j] = $result['id'];
            $j++;
        }
    }


    $userquery = "SELECT * FROM users_info WHERE wedding_code = '$account'";
    $getusernamedata = mysqli_query($con,$userquery);
    $row_user_data = mysqli_num_rows($getusernamedata);
    if($row_user_data==1){
      
        $getusername = mysqli_fetch_row($getusernamedata);
        $u = $getusername[1];
        $us = explode(" ",$u);
        $username = ucfirst($us[0]);

    }else{
        echo "<script>alert('Something Went Wrong!! Try Again');window.location.assign('https://shadiviah.in/Home-Shadiviah');</script>";
        mysqli_close($con);
        exit;
    }
  mysqli_close($con);


  }

  if(!isset($_COOKIE['shadiviah_family'])){
      header('location:../Signin');
  }
?>