
<?php
error_reporting(0);
  function decode_date_ymd($date){
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

  function monthname($m){
    $mname = $m;
    $m = (int)$m;
    
    if($m==1){$mname="January";}  if($m==2){$mname="Febuary";}  if($m==3){$mname="March";}  if($m==4){$mname="April";}  if($m==5){$mname="May";}  if($m==6){$mname="June";}
    if($m==7){$mname="July";}  if($m==8){$mname="August";}  if($m==9){$mname="September";}  if($m==10){$mname="October";}  if($m==11){$mname="November";}  if($m==12){$mname="December";} 
    return $mname;
  }
?>
<?php

function decode($text){

$set=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9',' ');

                      //  63 ELEMENTS & 62 INDEXES

$encodeset = array('we','sw','yu','tu','3r','5h','3l','6q','9i','3p','2w','0w','1b','oe','0q','qw','pw','jg','qj','qp','ip','mt','av','er','zs','xo','WE','SW','YU','TU','3R','5H','3L','6Q','9I','3P','2W','0W','1B','OE','0Q','QW','PW','JG','QJ','QP','IP','MT','AV','ER','ZS','XO', 'zz','oo','tt','rr','uu','vv','xx','qq','gg','nn','ss');

$num = strlen($text);
if($num%2!=0){
	return 0;
}
$decoded="";
$couple="";
for($i=0;$i<strlen($text);$i++){
	$couple = $couple.$text[$i].$text[$i+1];
	$i++;
	if(in_array($couple,$encodeset)){
	    for($j=0;$j<63;$j++){
		    if($couple==$encodeset[$j]){
		    	$decoded = $decoded.$set[$j];
		    }
           
		}	
	}
	else{
			$decoded = $decoded.$couple[0];
		}

	$couple="";
}
return $decoded;
}



?>



<?php
 $server =  $_SERVER['SERVER_NAME'];
 $server = "http://".$server."/project";

?>

<?php
   $invite_set = 0;
   if(isset($_GET['invite'])){
      $invite_set=1;
      $inviting_to = decode($_GET['invite']);
      $inviting_to = strtolower($inviting_to);
      if($inviting_to[-1]=="f" && $inviting_to[-2]=="f" && $inviting_to[-3]=="-"){
        $inviting_to = str_replace("-ff"," (With Family)",$inviting_to);
      }
      $inviting_to = ucfirst($inviting_to);
   }
?>


<?php
 $current_file = basename($_SERVER['PHP_SELF']); 
 $current_file = str_replace(".php","",$current_file);

 $con=mysqli_connect('localhost','root','','shadiviah');
 if(mysqli_connect_errno()){ 
  $con=mysqli_connect('localhost','root','','shadiviah');
 }
 
 $queryfire = "select * from config where pagename = '$current_file' and deletestatus=0";
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
 $insight = (int)$insight;
 $insight = $insight+1;
 $updatequeryfire = "UPDATE wedding SET insight = $insight WHERE wedding_code = '$wedcode'";
 mysqli_query($con,$updatequeryfire);


 // CREATE DATE
   $singledate = explode("-",$baratdate);
   $single_date = $singledate[2];
   $single_month = $singledate[1];
   $single_month = monthname($single_month);
   $single_year = $singledate[0];
 // DATE OVER

//  GET FAMILY PHOTOS FROM WEDDING IMAGES    //

$imagequery = "SELECT * from wedding_images WHERE weddingcode = '$wedcode' AND deletestatus = 0 AND feature = 0";
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


$imagequery = "SELECT * from wedding_images WHERE (weddingcode = '$wedcode' AND deletestatus = 0) AND (feature =1 or feature = 2)";
$getimage = mysqli_query($con,$imagequery);
$couples_image_row_count = mysqli_num_rows($getimage);
if($couples_image_row_count==0){
  $main_image = $server."/site_image/no_image_upload.jpg";
}
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
    $temp = $num_img%2;
    if($temp==1){
      $couple_caption_random[$num_img]=$couple_caption_random[0];
      $couple_image_random[$num_img] = $couple_image_random[0];
      $num_img = $num_img+1;
    }
    $max_pair = $num_img/2; 
    
    if($num_img==1 || $num_img==2 || $num_img==3){
      $main_image = $server."/wedding_images/".$couple_image_random[0];
    }
    if($num_img==4 || $num_img==5 || $num_img==6){
      $main_image = $server."/wedding_images/".$couple_image_random[2];
    }
    
    if($num_img==7 || $num_img==8 || $num_img==9){
      $main_image = $server."/wedding_images/".$couple_image_random[6];
    }
    
    if($num_img==10 || $num_img==11 || $num_img==12){
      $main_image = $server."/wedding_images/".$couple_image_random[9];
    }
    if($num_img>12){
      $main_image = $server."/wedding_images/".$couple_image_random[11];
    }
    
}

$blessquery = "SELECT * from bless where (deletestatus = 0) AND (wedding_code = '$wedcode' OR wedding_code = 'All')";
$getbless = mysqli_query($con,$blessquery);
$bless_int = 0;
while($result = mysqli_fetch_array($getbless)){
     $blessername[$bless_int] = $result['blesser_name'];
     $blessemail[$bless_int] = $result['email'];
     $blessto[$bless_int] = $result['blessto'];
     $message[$bless_int] = $result['blesser_message'];
     $blesscode[$bless_int] = $result['bless_code'];
     if($blesscode[$bless_int]=="BLESS"){
         $bless_dp[$bless_int] = "shadiviah.jpg";
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
$d = "themesix.css";
?>


<?php

$mediatorqurey = "SELECT * from mediators where username='$registerby'";
$getmediatordata = mysqli_query($con,$mediatorqurey);
while($result = mysqli_fetch_array($getmediatordata)){
  $shopname = $result['shopname'];
  $shopaddress = $result['address'];
  $mediatormobile = $result['mobileone'];
  $ownername = $result['name'];
}

?>

<?php
  if($weddingof=="boy"){
    $firstname = $boy;
    $secondname = $girl;

    
    $ff = explode(" ",$firstname);
    $firstname_first = ucfirst($ff[0]);
     
    $ss = explode(" ",$secondname);
    $secondname_second = ucfirst($ss[0]);



    $firstaddress = $boyaddress;
    $secondaddress = $girladdress;
    $firstfather = $boyfather;
    $firstmother = $boymother;
    $secondfather = $girlfather;
    $secondmother = $girlmother;
    $lagan_address = $programaddress;
    $barat_address = $barataddress;
    $weddingvenue_text = ucfirst($lagan_address);

    $first_ds = "s/o";
    $second_ds = "d/o";
    $bhat_address=$lagan_address;
    $bhat_date = $decode_lagandate;
  }
  if($weddingof=="girl"){
    $firstname = $girl;
    $secondname = $boy;

    
    $ff = explode(" ",$firstname);
    $firstname_first = ucfirst($ff[0]);
     
    $ss = explode(" ",$secondname);
    $secondname_second = ucfirst($ss[0]);



    $firstaddress = $girladdress;
    $secondaddress = $boyaddress;
    $firstfather = $girlfather;
    $firstmother = $girlmother;
    $secondfather = $boyfather;
    $secondmother = $boymother;
    $lagan_address = $programaddress;
    $barat_address = $barataddress;
    $weddingvenue_text = ucfirst($barat_address);

    $first_ds = "d/o";
    $second_ds = "s/o";
    $bhat_address=$barat_address;
    $bhat_date = $decode_baratdate;
  }

?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo ucfirst($firstname); ?>  <?php echo $first_ds; ?> Mr <?php echo ucfirst($firstfather); ?> and Mrs <?php echo ucfirst($firstmother); ?>  (<?php echo $firstaddress; ?>) is going to be wed with <?php echo ucfirst($secondname); ?> <?php echo $second_ds; ?> Mr <?php echo ucfirst($secondfather); ?> and Mrs <?php echo ucfirst($secondmother); ?> (<?php echo $secondaddress ?>) on <?php echo $decode_baratdate; ?>. Kindly come and make the wedding beautiful by presence of you.">
    <meta name="author" content="Sttar Vipin Rao">
    <meta name="keywords" content="Shadiviah, Shadiviah.in,<?php echo $firstname; ?>, Weds, <?php echo $secondname; ?> , <?php echo $firstname_first; ?>, <?php echo $secondname_second; ?>, <?php echo $secondfather; ?>, <?php echo $secondmother; ?>, <?php echo $secondfather; ?> , <?php echo $lagan_address; ?>,<?php echo $barat_address; ?>,<?php echo $decode_baratdate; ?>">
    <link rel="icon" href="<?php echo $server; ?>/site_image/love.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $server; ?>/bootcss/animate.css">
    <link rel="stylesheet" href="<?php echo $server; ?>/bootcss/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo $server; ?>/bootcss/bootstrap.css"/>
    <link rel="stylesheet" href="https://npmcdn.com/flickity@2/dist/flickity.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo $server; ?>/Wedding/theme_css/main-css.css">
    <link rel="stylesheet" href="<?php echo $server; ?>/Wedding/theme_css/ThemeEleven.css"/>

    <title><?php echo $firstname_first; ?> Weds <?php echo $secondname_second; ?></title>
    <!-- <meta http-equiv="refresh" content="30"> -->
    <style>

    </style>
    <script>
   //   alert("Its is a sample Theme. The Data given in it is not true, Its is only for user understanding That how its work!!");
    </script>

  </head>
  <body>

<header class="element-header  container-fluid">
<div class="header-top  container-fluid" id="Top" style="text-align:center;">
   <h1 class="h1" onclick="window.location.assign('<?php echo $server; ?>/');" style="width:auto;display:inline-block;cursor:pointer;">
     SHADIVIAH.IN
  </h1>
</div>
<div class="icon-div container-fluid">
  <center>
      <img src="<?php echo $server; ?>/site_image/ring3.png" class="ring-icon" alt="shadiviah">
  </center>
</div>
  <center>
      <span class="span1 zmh mt-my">
      Creator of this world the Almighty has also created wonderful occasion of celebration
      </span>
      <h1 class="couples-name">
      <?php echo $firstname; ?> <span style="color: aqua;">And</span> <?php echo $secondname; ?>
      </h1>
      <span class="span1 span-on zmh">
        ON
     </span>
     <button class="btn date-btn zmh"><?php echo $single_date; ?> <?php echo $single_month; ?> <?php echo $single_year; ?></button>
  </center>

</header>
<div class="element-to-overlap  container-fluid">
   <div class="row-element-in-overlap zero row " id="Programs">
        <div class="common-overlap-cols overlap-cols-1 col-lg-3 ">
          <div class="overlap-cols-main-common  overlap-cols-main-1" >
            <h5 class="ceromany-heading ">
                Lagan Ceremony
             </h5>
             <h5 class="ceromany-date-heading ">
             <?php echo $decode_lagandate; ?>
           </h5>
           <span class="Address-span">
           <?php echo ucfirst($lagan_address); ?>
           </span>
          </div>
        </div>
        <div class="common-overlap-cols overlap-cols-2 col-lg-3 ">
            <div class="overlap-cols-main-common  overlap-cols-main-2">
                <h5 class="ceromany-heading ">
                    Bhaat Ceremony ;-)
                 </h5>
                 <h5 class="ceromany-date-heading ">
                 <?php echo $bhat_date; ?>
               </h5>
               <span class="Address-span">
               <?php echo ucfirst($bhat_address); ?>
               </span>
            </div>
        </div>
        <div class="common-overlap-cols overlap-cols-3  col-lg-3 ">
            <div class="overlap-cols-main-common  overlap-cols-main-3">
                <h5 class="ceromany-heading ">
                    Baraat & Stage Program
                 </h5>
                 <h5 class="ceromany-date-heading ">
                 <?php echo $decode_baratdate; ?>
               </h5>
               <span class="Address-span">
               <?php echo ucfirst($barat_address); ?>
               </span>
            </div>
        </div>
        <div class="common-overlap-cols overlap-cols-4 col-lg-3 ">
            <div class="overlap-cols-main-common  overlap-cols-main-4">
                <h5 class="ceromany-heading ">
                    Vidaai<br>:-)
                 </h5>
                 <h5 class="ceromany-date-heading ">
                 <?php echo $decode_baratdate; ?>
               </h5>
               <span class="Address-span">
                 Taron ki chhav mein 🙂🙂
               </span>
            </div>
        </div>
   </div>
</div>

<div class="container-fluid strip"></div>

<div class="element-extraspace container-fluid"></div>



<div class="element-startup-row container-fluid row">
    <div class="element-rotate-ensistor col-lg-5">
      <div class="elementtoberotate container-fluid">  
        <div class="element-inner-rotative-div container-fluid">
          <img src="<?php echo $main_image; ?>" alt="Couples" class="main-img inset-0 w-full h-full object-cover object-center">
        </div>
      </div>  
    </div>
    <div class="element-for-text col-lg-7">
      <h3 class="couples-new-heading-element">
         Deepak Yadav <span style="color: #6a869e;"> Weds </span> Pallavi Yadav
      </h3>
      <p class="inviting-text-row-element">
       Smt. <?php echo ucfirst($firstmother); ?> & Sh. <?php echo ucfirst($firstfather); ?> together with Smt. <?php echo ucfirst($secondmother); ?>
       & Sh. <?php echo ucfirst($secondfather); ?> Request the pleasure of your gracious presence and blessing on the ouspicious occasion 
       of the marriage of their Children <span style="color:#59A4E6;"><?php echo ucfirst($firstname); ?></span> And <span style="color:#59A4E6;"> <?php echo ucfirst($secondname); ?> </span> (From: <?php echo $secondaddress; ?>) On <?php echo $single_date; ?> <?php echo $single_month; ?> <?php echo $single_year; ?>.
  
      </p>
   </div>
  </div>
  <hr class="container-fluid hr1">
  


  <div class="gallery-element container-fluid">
    <center>
        <h4 class="collection-font-heading" id="Gallery">
            Photos  Album
        </h4>
    </center>

<?php
   if($couples_image_row_count==0){
    echo '<h1 style="text-align:center;"><b>No photo Uploaded</b></h1>';
    echo '<hr class="container-fluid hr1">';
   }
   if($couples_image_row_count>0){
     $pair = 0;
     for($w=0;$w<$num_img;$w=$w+4){
       $plus_w = $w + 1;
       $plustwo_w = $w+2;
       $plusthree_w = $w+3;
echo<<<coupleAlbum
    <div class="collection-rotating-element container-fluid ">
        <div class="element-row row container-fluid">
           <div class="col-lg-5 col-sm-5 custom-col-1-for-img">
               <div class="main-for-collections-img container-fluid "> 
                 <center><img class="img-collection inset-0 w-full h-full object-cover object-center" src="$server/wedding_images/$couple_image_random[$w]" alt="shadiviah-couples"></center>
                   
               </div>
           </div>
           <div class="col-lg-5 col-sm-5 custom-col-1-for-img">
            <div class="main-for-collections-img container-fluid "> 
                <center><img class="img-collection inset-0 w-full h-full object-cover object-center" src="$server/wedding_images/$couple_image_random[$plus_w]" alt="shadiviah-couples"></center>

            </div>
        </div>
        </div>
    </div>
coupleAlbum;
$pair++;

if($pair==5){
  break;
}

if($pair!=$max_pair){
echo<<<coupleAlbum2
    <div class="collection-rotating-element opp container-fluid ">
        <div class="element-row row container-fluid">
            <div class="col-lg-5 col-sm-5 custom-col-1-for-img">
                <div class="main-for-collections-img container-fluid "> 
                    <center><img class=" img-collection inset-0 w-full h-full object-cover object-center" src="$server/wedding_images/$couple_image_random[$plustwo_w]" alt="shadiviah-couples"></center>
 
                </div>
            </div>
            <div class="col-lg-5 col-sm-5 custom-col-1-for-img">
             <div class="main-for-collections-img container-fluid "> 
                <center><img class=" img-collection  inset-0 w-full h-full object-cover object-center" src="$server/wedding_images/$couple_image_random[$plusthree_w]" alt="shadiviah-couples"></center>
 
             </div>
         </div>
         </div>
    
    </div>
coupleAlbum2;
$pair++;
}
  if($pair==5){
    break;
  }
     }
   }

?>

  </div>   <!--Album Over-->

  <div class="invitation-element container-fluid">
     <center>
     <h1 class="invite-heading">Make Our Wedding Memorable </h1>
     <p class="invite-para">
      We are extremely excited about our wedding and cannot begin to express how thrilled we are to share this special day with all of you.<br>
      Each one of you have touched our lives in one way and hope that you all will be there with us for the joyous occasion.<br>
      We will remember as the magical time in our lives when all of our closest family and friends come together to be a part of our coming together. We sincerely hope that our wedding is more than a celebration of our love but also the beginning of a very special friendship between our families and friends.<br>
      Our website contains many information about our wedding as well as photo gallery of our families and friends.
      Don't forget to bless us in bless book and remember to check back after the wedding for our wedding pictures.<br>
      Thank you for visiting our website and hope to see you soon in Our Marriage!<br>
      Occasions are Occasional but your presence is Sensational....<br>
      Awaiting for your Presence!!!!!!!
     </p>
     </center>
  </div>



  <div class="location-element ">
     <center>
       <h1 class="track-heading " id="Address">Track us Here</h1>
       <span class="span-address">Address : <?php echo ucfirst($firstaddress); ?> <br>Contact us : (+91) <?php echo $mobile; ?></span>
     </center>
     <div class="location-rotating-elemnet container-fluid">
      <div class="location-main container-fluid">
        <iframe src="<?php echo $frame_location;  ?>" class="container-fluid element-iframe" frameborder="0"></iframe>
      </div>
     </div>
  </div>



  <hr class="container-fluid hr1">


 

  <div class="blessbook-element-result  container-fluid ">
    <center>
      <h1 class="invite-heading bless-heading">
        Blessings  To Newly couples 
      </h1>
    </center>
    <div class="blessbook-row-element row container-fluid "> 
<?php     
for($mt=0;$mt<$num_bless;$mt++){
echo<<<blessings
    <div class="col-lg-3 col-md-5 commaon-b-book-col ">
         <div class="main-b-book"> 
            <div class="dp-1 container-fluid">
              <img src="$server/site_image/$bless_image_random[$mt]" class="inset-0 w-full h-full object-cover object-center" alt="shadiviah-user">
            </div>
            <span class="blesser-name"> $bless_name_random[$mt] </span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mt-2 mb-3" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <div class="para-bless-div container-fluid">
              <p class="bless-text">
               $bless_message_random[$mt]
              </p>
            </div>
         </div>
      </div>
blessings;
if($mt==3){
  break;
}
    }
?>
    </div>
  </div>











  <div class="element-best-wishes container-fluid">
    <center>
     <h4 class="best-heading" id="Blessings">
       Send The Best Wishes To Upcoming Couples.
     </h4>
    </center>
    <div class="best-wishes-element-row row container-fluid">
       <div class="element-best-colmn-form col-lg-5" id="Blessings">
          <form action="<?php echo $server; ?>/Wedding/source/saveblessings.php" onsubmit="return validform();" name="form" method="POST">
             <label for="nametext" class="nametext-label">
               Your Name:
             </label>
             <input type="text" class="nameinput" id="nametext"  name="name" placeholder="Full Name" pattern=".{2,15}" title="Two to Fifteen characters">
             <label for="mailtext" class="nametext seperate-label-mail">Your Email:</label>
             <input type="email" class="nameinput" name="email" id="nametext" placeholder="Email" pattern=".{5,50}" title="Five to Fifty character long email only">
             <input type="hidden" value="<?php echo $wedcode; ?>" name="code" >
             <label for="select" class="nametext seperate-label-mail">Wishing To:</label>
             <select  id="select" name="blessto" class="nameinput select_input">
                <option value="Both">Both</option>
                <option value="Gromm">Groom</option>
                <option value="Bride">Bride</option>
             </select>
             <label for="textarea" class="nametext seperate-label-mail">Write Some Best Wishes: </label>
             <textarea type="email" name="message" id="textarea" class="nameinput resize-none text-area" placeholder="Message" id="nametext"></textarea>
            <input type="submit" class="btn btn-primary btn-submit btn-block"  id="submit">
            <input type="reset" class="btn btn-danger btn-submit "  id="reset">
  
          </form>
       </div>
       <div class="line"></div>
       <div class="element-best-colmn-pinned col-lg-5">
        <section class="text-gray-600 body-font margin-tail-div-pinned">
          <div class="container margin-tail-div-pinned">
            <div class="xl:w-2/2 lg:w-4/4 w-full margin-tail-div-pinned mx-auto text-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
              </svg>
              <p class="leading-relaxed text-lg pinned-tail-text">
                 <span style="color:blue;font-weight:500;">We are happy to inform you that <?php echo ucfirst($firstname);  ?> <?php echo $first_ds; ?> <?php echo ucfirst($firstfather); ?> and <?php echo ucfirst($firstmother); ?> (Address: <?php echo ucfirst($firstaddress); ?>) is going to marry with <?php echo ucfirst($secondname)." ".$second_ds." ".ucfirst($secondfather)." and ".ucfirst($secondmother)." (Address: ".$secondaddress.") on ".$single_date." ".$single_month." ".$single_year."."; ?>  </span><br>
                 Kindly Share some best wishes to the Upcoming Couple <br>
                 <b>Note:</b> Your Blessed Message will shown here after completly checked up. Shadiviah Team checked that your message should not contain abusing words.
              </p>
              <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
              <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">SHADIVIAH OFFICIAL</h2>
              <p class="text-gray-500">-Sttar Vipin Rao</p>
            </div>
          </div>
        </section>
        <button class="btn-view-more btn btn-link btn-block"  onclick="viewbless();">View All Blessings</button>
       </div>
    </div>
  </div>
  
  









  <footer class="foot-element container-fluid ">
    <div class="rsvp-element-complete container-fluid">
      <center><h4 class="family-awaiting">Our family is waiting for you</h4></center>
      <div class="rsvp-pic-row row container-fluid" id="Family">
      <?php    
      if($family_image_row_count==0){
             echo '<br><br><h1>NO PHOTOS UPLOADED FOR FAMILY MEMBERS</h1>';
             echo '<hr class="container-fluid hr1">';
            }
      
      if($family_image_row_count>0){
        for($it=0;$it<$family_image_row_count;$it++){
        echo<<<fam_img

        <div class="col-lg-3 col-sm-5 common-col-rsvp">
          <div class="comman-main-rsvp-col">
             <div class="div-for-image">
                <img src="$server/wedding_images/$family_image[$it]" class="inset-0 w-full h-full object-cover object-center"  alt="shadiviah-family">
             </div>
             <p class="family-name">$caption_family_image[$it]</p>
          </div>
        </div>
fam_img;
        }
      }
  ?>
      </div> <!--row over-->
    </div><!--rsvp over-->

    <div class="container-fluid row footer-part-row">
    <div class="column-in-footer-1 col-lg-3 col-md-6 ">
       <div class="logo-element container-fluid ">
           <img src="<?php echo $server; ?>/site_image/shadi_viah_logo.png" alt="shadiviah-logo" style="cursor:pointer;" onclick="window.location.assign('<?php echo $server; ?>/');">
       </div>
       <p class="footer-text">Make Your Wedding Memorable!!</p>
    <div class="container-fluid social-media-icons-elements ">
      <div class="icons-element">
         <img src="<?php echo $server; ?>/site_image/facebook_shadiviah.png" style="cursor:pointer;" onclick="window.location.assign('https://www.facebook.com/Shadiviahin-100283152027266');" alt="shadiviah-icons">
      </div> 
      <div class="icons-element">
       <img src="<?php echo $server; ?>/site_image/instagram_shadiviah.png" style="cursor:pointer;" onclick="window.location.assign('https://www.instagram.com/shadiviah.in/');" alt="shadiviah-icons">
      </div>
      <div class="icons-element">
       <img src="<?php echo $server; ?>/site_image/twitter_shadiviah.png" style="cursor:pointer;" onclick="window.location.assign('https://twitter.com/ShadiviahI');" alt="shadiviah-icons">
      </div>
      <div class="icons-element">
       <img src="<?php echo $server; ?>/site_image/youtube_shadiviah.png" style="cursor:pointer;" onclick="window.location.assign('https://www.youtube.com/channel/UCq1fDJfuGuesgMsm0p5ILjQ');" alt="shadiviah-icons">
      </div>
    </div>
 
    </div>
    <div class="col-lg-3 col-md-6 footparttwo">
      <p class="footer-text-two">Wedding card published by : <?php echo ucfirst($shopname); ?></p>
      <p class="footer-text-two my-mt-2"><span class="black d-blue">Owner Name : </span><?php echo ucfirst($ownername); ?> </p>
      <p class="footer-text-two my-mt-2"><span class="black d-blue">Shop Address : </span> <?php echo ucfirst($shopaddress); ?></p>
      <p class="footer-text-two my-mt-2"><span class="black d-blue">Mobile num : </span>(+91) <?php echo $mediatormobile ?></p>
      <a href="tel:<?php echo $mediatormobile; ?>" id="a"><button class="btn btn-success  my-mt-3 call-btn">Call</button></a>
   </div> 
   <div class="col-lg-2 col-md-6">
     <p class="footer-text-two  black ">Usefull Links:</p>
     <ul class="ul" style="list-style-type:square">
      <a href="#Address" class="atag" >
        <li class=" li-text"  ">
          Address
        </li>
        </a><br>
         <a href="#Blessings" class="atag" >
        <li class=" li-text">
          Blessings
        </li>
        </a><br>
        <a href="#Gallery" class="atag" >
        <li class=" li-text" >
          Gallery
        </li>
        </a><br>
        <a href="#Family" class="atag" >
        <li class=" li-text" >
          Family
        </li>
        </a><br>
        <a href="#Programs" class="atag" >
        <li class=" li-text">
          Programs
        </li>
        </a><br>
        <a href="#Top" class="atag" >
        <li class=" li-text" >
          Back to top
        </li>
        </a><br>
     </ul>
   </div>
   <div class="col-lg-2 col-md-6 ">
     <p class="footer-text-two  black ">Other Links:</p>
     <ul class="ul" style="list-style-type:circle">
       <a href="<?php echo $server; ?>/" class="atag">
       <li class=" li-text" >
         Home
       </li>
       </a><br>
       <a href="<?php echo $server; ?>/Contact-Shadiviah" class="atag">
       <li class=" li-text" >
         Contact
       </li>
     </a><br>
     <a href="<?php echo $server; ?>/About-Shadiviah" class="atag">
       <li class=" li-text">
         About
       </li>
     </a><br>
     <a href="<?php echo $server; ?>/Invitation-Shadiviah" class="atag">
       <li class=" li-text" >
         Invite Someone
       </li>
     </a><br>
     <a href="mailto: shadiviah.in@gmail.com" class="atag">
       <li class=" li-text">
         Technical_Support
       </li>
     </a><br>
     <a href="<?php echo $server; ?>/Help-Shadiviah" class="atag">
       <li class=" li-text" >
         Help
       </li>
     </a><br>
     <a href="<?php echo $server; ?>/Terms-and-condition-Shadiviah" class="atag">
       <li class=" li-text" >
         Policies
       </li>
     </a><br>
     </ul>
   </div>
   
   <div class="col-lg-2 col-md-6">
     <p class="footer-text-two  black ">Follow us on:</p>
     <ul class="ul" style="list-style-type:circle">
       <a href="https://www.facebook.com/Shadiviahin-100283152027266" class="atag">
       <li class=" li-text">
         Facebook
       </li>
       </a><br>
       <a href="https://www.instagram.com/shadiviah.in/" class="atag">
       <li class=" li-text" >
         Instagram
       </li>
     </a><br>
     <a href="https://twitter.com/ShadiviahI" class="atag">
       <li class=" li-text">
         Twitter
       </li>
     </a><br>
     <a href="https://www.youtube.com/channel/UCq1fDJfuGuesgMsm0p5ILjQ" class="atag">
       <li class=" li-text" >
         Youtube
       </li>
     </a><br>
     </ul>
   </div>
  </div> <!--ROW OVER-->
 </footer>
 <footer class="footer-late container-fluid">
   <p class="late-foot-text">
     Proudly powerded by : <a href="<?php echo $server; ?>/">shadiviah.in</a> ||
     Contact us for any Technical Support || Shadiviah-2021 &#169;
   </p>
 </footer>
 










 <?php

if($invite_set==1){
echo<<<invitealert
  <div class="container-fluid alert-main" id="alert">
   <div class="container-fluid main-alert">
     <div class="container-fluid inner-alert-1">
       <span class="invite-message">
         Dear <span style="color:#ff49a4; font-weight:500;"> $inviting_to </span>, You are invited in the wedding of <span style="color:#ff49a4;">$firstname And $secondname 🌹</span> on $single_date of $single_month $single_year. Kindly Come And Make the occasion more beautiful by your presence.😍🥰<br>
         There is no excuse to be absent. So Accept the Invitation and view our Page of love.  😍🥰😊🤗🌹🌷🌼
       </span>
     </div>
     <button class="btn btn-danger btn-accept" onclick="thanks();">Accept</button>

   </div>
</div>
invitealert;

echo<<<bottom_notice
<div class="card-to-div ">
  <span class="card-to text-truncate">
    To : $inviting_to 
  </span>
</div>
bottom_notice;

}

?>

    
<script>
  function thanks(){
    var a = alert("WE ARE AWAITING FOR YOU!! ❤ Thank YOU!!! ❤🤗");
    document.getElementById('alert').style.display="none";
  }

  function validform() {
     var name = document.forms['form']['name'].value;
     var email = document.forms['form']['email'].value;
     var message = document.forms['form']['message'].value;

     if(name.trim()==""){
       alert("Please Enter Your Name");
       return false;
     }
     if(email.trim()==""){
       alert("Please Enter Your Email");
       return false;
     }
     if(message.trim()==""){
       alert("Please Enter Your Message");
       return false;
     }
     return true;

  }
  function viewbless(){
    alert("Only Owner Can See The Blessings! If You Are Owner Then Login First!!");
    window.location.assign("<?php echo $server; ?>/User/Pannel ");
  }
</script>


    





       <!-- <div class="container-fluid null"></div> -->
<!-- ############################################################################ -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>

  </body>
</html> 


<?php
  mysqli_close($con);
?>