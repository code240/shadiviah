<?php
error_reporting(0);

  include 'php/main.php';
?>
<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <!-- <meta http-equiv="refresh" content="30"> -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
        <link rel="icon" href="../site_image/love.png"/>
        <link rel="stylesheet" href="../bootcss/animate.css"/>
        <link rel="stylesheet" href="../bootcss/bootstrap.min.css"/>
        <link rel="stylesheet" href="../bootcss/bootstrap.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="../Text/Roboto.css">
        <link rel="stylesheet" href="css/flik.css">
        <link rel="stylesheet" href="css/page-pannel.css"/>
        
        <title>Control Pannel</title>
        <script>
              function deletepic(img,imgname){
                var confirmation = confirm("Are you sure that you want to delete this image?");
                if(confirmation){
                  document.getElementById("couplehiddenidinput").value = img;
                  document.getElementById("couplehiddenidinput_imagename").value = imgname;
                  document.getElementById("deletecoupleform").submit();
                }

              }

              function deletepic_family(img,imgname){
                var confirmation = confirm("Are you sure that you want to delete this image?");
                if(confirmation){
                  document.getElementById("familyhiddenidinput").value = img;
                  document.getElementById("familyhiddenidinput_imagename").value = imgname;
                  document.getElementById("deletefamilyform").submit();
                }

              }

              
</script>


  </head>
  <style>
    .header-img-div{
      background-image: url('<?php echo $front_img; ?>');
      background-size: cover;
    }
  </style>
<body>


    


<header class="header">
   <div class="main-frame container-fluid">
   <div class="top">
       <span class="company" onclick="window.location.assign('../Home-Shadiviah');">SHADIVIAH.IN</span>
   </div>
   <div class="inner-header-row container-fluid row">
      <div class="col-lg-7 col-md-6 col-12 comman-col-top ">
         <h1 class="h1-main">Hii, <?php echo $username; ?>.</h1>
         <h2 class="h2-tag">Let Control Your Webpage by yourself!</h2>
         <button class="btn-blessings" onclick="window.location.assign('../User/Blessings');">View blessings</button>
      </div>
      <div class="col-lg-5  col-md-6 col-12 photodivcol comman-col-top">
          <div class="header-img-div">

          </div>
      </div>
   </div>
   </div>
</header>





<!-- <div class="container-fluid strip"></div> -->






<form action="php/deletecouple.php" method="POST" id="deletecoupleform">
<input type="hidden" name="id" id="couplehiddenidinput">
<input type="hidden" name="imgname" id="couplehiddenidinput_imagename">
</form>
<form action="php/deletefamily.php" method="POST" id="deletefamilyform">
<input type="hidden" name="id" id="familyhiddenidinput">
<input type="hidden" name="imgname" id="familyhiddenidinput_imagename">
</form>




<div class="element-couples">
   <h2 class="couples-heading">
      Manage Your Gallery (<?php echo $couple_image_rows; ?>/15)
   </h2>
  
<?php
if($couple_image_rows==0){
 echo '<br><h1 style="text-align:center;">NO IMAGE UPLOADED</h1><br>';
}
echo ' <div class="couples-image-row-main-element row container-fluid">';
if($couple_image_rows>0){

for($f=0;$f<$couple_image_rows;$f++){
echo<<<coupleimg
  <div class="col-lg-3 col-sm-6 col-comman">
        <div class="container-fluid gallery-col-main">
          <div class="photo-div container-fluid">
             <img src="../wedding_images/$couple_image[$f]" class="couple-img" alt="pannel-pics-couples">
          </div>
          <button class="btn btn-primary delete-btn container-fluid" onclick="deletepic('$couple_image_id[$f]','$couple_image[$f]')">Delete</button>
        </div>
     </div>
coupleimg;
}
}
?>

  <div class="col-lg-3 col-sm-6 col-comman">
      <div class="container-fluid gallery-col-main">
        <div class="add-new container-fluid">
           <div class="icon-add-set"></div>
        </div>
         <button class="btn btn-success Add-btn container-fluid" onclick="CouplePhotoUpload();">Add new</button>
      </div>
  </div>
   </div>

  <div class="image-form-div upload container-fluid" id="upload">
       
    <h5 class="myheading">  
       Select Image Here For Couples-Gallery Only.
    </h5>
    
    <div class="main-formdiv">
      <form action="php/uploadcouple.php"  method="POST" enctype="multipart/form-data" name="coupleform" onsubmit="return isvalid();">
        <input type="file" name="i1" id="file2" accept="image/*">
        <input type="text" name="c1" id="caption2" autocomplete="off" placeholder="Caption">
        <input type="submit" value="UPLOAD" id="submitcouple"  class="btn btn-success submit2 container-fluid">
      </form>
      </div>   

  </div>

</div>


<div class="container-fluid family-img-element">
  <h4 class="advance-heading">
    ADVANCE SETTING
  </h4>
  <div class="container-fluid row element-row-advance">
     <div class="col-lg-5 left-edit edit-common">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h2 class="mb-0">
              <span class=" span-btn-collapse collapsed" >
                Change Groom Name
              </span>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <h5 class="heading-change-advance">Enter the New  Name of Groom:</h5>
              <form action="php/updations/updategroomname.php" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Groom Name" value="<?php echo $boy; ?>" id="mail" name="boy" autocomplete="off" pattern=.{3,25} title="3 TO 25 CHARACTERS">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"> Update </button>
                </div>
              </div>
              </form>
              <span class="span-note">
                <b>Note:</b> The Change will appear immediately on your wed page. So , kindly be aware before update anything.
              </span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h2 class="mb-0">
              <span class=" span-btn-collapse collapsed" >
              Change Groom Address
              </span>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <h5 class="heading-change-advance">Enter the New Address :</h5>
              <form action="php/updations/updategroomaddress.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Change Address" value="<?php echo $boyaddress; ?>" id="mail" name="boyaddress"  autocomplete="off" pattern=.{3,50} title="3 TO 50 CHARACTERS">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"> Update </button>
                </div>
              </div>
              </form>
              <span class="span-note">
                <b>Note:</b> The Change will appear immediately on your wed page. So , kindly be aware before update anything.
              </span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h2 class="mb-0">
              <span class=" span-btn-collapse collapsed" >
                 Change Father's Name of Groom 
              </span>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <h5 class="heading-change-advance">Enter the New Name :</h5>
              <form action="php/updations/updateboyfather.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Father's Name" value="<?php echo $boyfather; ?>" id="mail" name="boyfather"  autocomplete="off" pattern=.{3,25} title="3 TO 25 CHARACTERS">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"> Update </button>
                </div>
              </div>
              </form>
              <span class="span-note">
                <b>Note:</b> The Change will appear immediately on your wed page. So , kindly be aware before update anything.
              </span>
            </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header" id="headingThree2" type="button" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
            <h2 class="mb-0">
              <span class=" span-btn-collapse collapsed" >
                Changes Mother's Name of Groom 
              </span>
            </h2>
          </div>
          
          <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordionExample">
            <div class="card-body">
              <h5 class="heading-change-advance">Enter the New Name :</h5>
              <form action="php/updations/updateboymother.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Mother's Name" value="<?php echo $boymother; ?>" id="mail" name="boymother"  autocomplete="off" pattern=.{3,25} title="3 TO 25 CHARACTERS">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"> Update </button>
                </div>
              </div>
              </form>
              <span class="span-note">
                <b>Note:</b> The Change will appear immediately on your wed page. So , kindly be aware before update anything.
              </span>
            </div>
          </div>
        </div>

        <div class="card  my-border-bottom">
          <div class="card-header" id="headingThree3" type="button" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
            <h2 class="mb-0">
              <span class=" span-btn-collapse collapsed" >
                 Change Lagan program Address
              </span>
            </h2>
          </div>
          <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordionExample">
            <div class="card-body">
              <h5 class="heading-change-advance">Enter the New Lagan Address :</h5>
              <form action="php/updations/updatelaganaddress.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Lagan Address" value="<?php echo $programaddress; ?>" id="mail" name="lagan"   autocomplete="off" pattern=.{3,50} title="3 TO 50 CHARACTERS">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"> Update </button>
                </div>
              </div>
              </form>
              <span class="span-note">
                <b>Note:</b> The Change will appear immediately on your wed page. So , kindly be aware before update anything.
              </span>
            </div>
          </div>
        </div>



      </div>
     </div>

     <div class="col-lg-5 right-edit edit-common">
      <div class="accordion" id="accordionExample2">
        <div class="card">
          <div class="card-header" id="headingFour" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <h2 class="mb-0">
              <span class=" span-btn-collapse collapsed" >
                Change Bride Name
              </span>
            </h2>
          </div>
      
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample2">
            <div class="card-body">
              <h5 class="heading-change-advance">Enter the New  Name of Bride :</h5>
              <form action="php/updations/updategirlname.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Bride Name" id="mail" value="<?php echo $girl; ?>" name="girl"   autocomplete="off" pattern=.{3,25} title="3 TO 25 CHARACTERS">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"> Update </button>
                </div>
              </div>
              </form>
              <span class="span-note">
                <b>Note:</b> The Change will appear immediately on your wed page. So , kindly be aware before update anything.
              </span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFive" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            <h2 class="mb-0">
              <span class=" span-btn-collapse collapsed" >
                Change Bride Address
              </span>
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample2">
            <div class="card-body">
              <h5 class="heading-change-advance">Enter the New Address :</h5>
              <form action="php/updations/updategirladdress.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Address"  id="mail" value="<?php echo $girladdress; ?>" name="girladdress"   autocomplete="off" pattern=.{3,50} title="3 TO 50 CHARACTERS">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"> Update </button>
                </div>
              </div>
              </form>
              <span class="span-note">
                <b>Note:</b> The Change will appear immediately on your wed page. So , kindly be aware before update anything.
              </span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingSix" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
            <h2 class="mb-0">
              <span class=" span-btn-collapse collapsed" >
                Change Father's Name of Bride
              </span>
            </h2>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample2">
            <div class="card-body">
              <h5 class="heading-change-advance">Enter the New  Name :</h5>
              <form action="php/updations/updategirlfather.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Father's name" value="<?php echo $girlfather; ?>" id="mail" name="girlfather"   autocomplete="off" pattern=.{3,25} title="3 TO 25 CHARACTERS">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"> Update </button>
                </div>
              </div>
              </form>
              <span class="span-note">
                <b>Note:</b> The Change will appear immediately on your wed page. So , kindly be aware before update anything.
              </span>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingSeven" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
            <h2 class="mb-0">
              <span class=" span-btn-collapse collapsed" >
                Change Mother's Name of Bride
              </span>
            </h2>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample2">
            <div class="card-body">
              <h5 class="heading-change-advance">Enter the New Name :</h5>
              <form action="php/updations/updategirlmother.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Mother's Name" value="<?php echo $girlmother; ?>" id="mail" name="girlmother"   autocomplete="off" pattern=.{3,25} title="3 TO 25 CHARACTERS">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"> Update </button>
                </div>
              </div>
              </form>
              <span class="span-note">
                <b>Note:</b> The Change will appear immediately on your wed page. So , kindly be aware before update anything.
              </span>
            </div>
          </div>
        </div>



        <div class="card my-border-bottom">
          <div class="card-header " id="headingSeven2" type="button" data-toggle="collapse" data-target="#collapseSeven2" aria-expanded="true" aria-controls="collapseSeven">
            <h2 class="mb-0">
              <span class=" span-btn-collapse collapsed" >
                Change Barat program address
              </span>
            </h2>
          </div>
          <div id="collapseSeven2" class="collapse" aria-labelledby="headingSeven2" data-parent="#accordionExample2">
            <div class="card-body">
              <h5 class="heading-change-advance">Enter the New Barat Address :</h5>
              <form action="php/updations/updatebarat.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Barat Address" value="<?php echo $barataddress; ?>" id="mail" name="barat"   autocomplete="off" pattern=.{3,50} title="3 TO 50 CHARACTERS">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"> Update </button>
                </div>
              </div>
              </form>
              <span class="span-note">
                <b>Note:</b> The Change will appear immediately on your wed page. So , kindly be aware before update anything.
              </span>
            </div>
          </div>
        </div>




      </div>
     </div>
  </div> 
</div>


<div class="location-div container-fluid">
  <h3 class="family-heading font-location heading-location-margin">Link / Update The Google map Location With Your Page.</h3>
  <p class="location-para" id="demo">Link Your Current location With Your wedding page, So that the relative and friends can easily reach to your wedding program. You can add your current location by just one click And your page's iframe will show the location of you.<br>Use For Once to understand more. </p><br>
  <button class="btn btn-primary btn-location" onclick="getLocation()">Take My Location</button><br>
  <p class="location-para2"><b>Note:</b> This System is most accurate for devices with GPS, like smartphones.</p><br>
   <iframe src="<?php echo $location_url; ?>"  class="frame container-fluid"></iframe>
  <p class="location-para2" style="color:red;margin-top:0.6rem"><b>Note:</b> Retry with a latest smartphone, if the location is incorrect.</p><br>
  <p class="location-para2" style="color:red;margin-top:0.6rem"><b>Note:</b> It will Only Work When Your Page Become Active.</p><br>

</div>

<form action="php/updatelocation.php" id="form" method="POST">
  <input type="hidden" name="latitude" id="h1">
  <input type="hidden" name="longitude" id="h2">
</form>

<script>
var x = "null";
var y = "null";

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x =  position.coords.latitude; 
  y = position.coords.longitude;
  sessionStorage.setItem("latitude", x);
  sessionStorage.setItem("longitude", y);
  document.getElementById("h1").value = x;
  document.getElementById("h2").value = y;
  document.getElementById("form").submit();
}
</script>





<hr class="container-fluid hr1">

<div class="element-family">
  <h3 class="family-heading">Family Member only (<?php echo $fam_img_row; ?>/4)</h3>
 <?php

if($fam_img_row==0){
    echo '<br><h1 style="text-align:center;">NO IMAGE UPLOADED</h1><br>';
}
    echo '<div class="couples-image-row-main-element row container-fluid">';

  if($fam_img_row > 0){
    for($e=0;$e<$fam_img_row;$e++){
    echo<<<fam
   <div class="col-lg-3 col-sm-6 col-comman">
       <div class="container-fluid gallery-col-main">
         <div class="photo-div container-fluid">
           <img src="../wedding_images/$family_image[$e]" class="couple-img" alt="pannel-pics-couples">
        </div>
        <button class="btn btn-danger delete-btn-fam container-fluid" onclick="deletepic_family('$familyid[$e]','$family_image[$e]');">Delete</button>
        <button class="btn btn-primary delete-btn-fam text-truncate container-fluid" onclick="viewname('$family_caption[$e]');">$family_caption[$e]</button>

       </div>
   </div>
fam;
    }
  }
?>
 <div class="col-lg-3 col-sm-6 col-comman">
     <div class="container-fluid gallery-col-main">
       <div class="add-new container-fluid">
          <div class="icon-add-set"></div>
       </div>
        <button class="btn btn-primary delete-btn container-fluid" onclick="FamilyPhotoUpload();">Add new</button>
     </div>
 </div>
  </div>


 <div class="image-family-form-div upload-2 container-fluid" id="Family">

 <h3 class="myheading">  
      Select Image Here For Family-Gallery Only.
   </h3>
   <div class="main-formdiv">
   <form action="php/uploadfam.php"  name="formfam" method="POST" enctype="multipart/form-data"  onsubmit="return formvalidationfamily();">
  
     <input type="file" accept="image/*" name="i1" id="file2">
     <input type="text" name="c1" id="caption2" autocomplete="off" placeholder="Caption">
     <input type="submit" value="UPLOAD" id="submitfam"  class="btn btn-success submit2 container-fluid">
   </form>
   </div>   
</div>
</div>

  <!-- <div class="container-fluid null "></div>   -->
<div class="help_div">
 For Any Help And Complaints Mail us on : contact@shadiviah.in
</div>

  <footer class="container-fluid footer-1">
    <div class="container-fluid row foot-row-1">
      <div class="col-lg-5 col-sm-5 comman-col-1-foot">
        <h3 class="wed-foot-heading">
          View Your Wedding Page
       </h3>
       <a href="<?php echo "https://shadiviah.in/Wedding/".$mypage.".php"; ?>" style="text-decoration:none;">
       <button class="btn btn-primary btn-view container-fluid">View</button>
       </a>
      </div>
      <div class="col-lg-5 col-sm-5 comman-col-1-foot">
        <h3 class="wed-foot-heading mrgn">
          Try Our Online Invitation System.
       </h3>
       <a href="../Invitation-Shadiviah" style="text-decoration:none;"><button class="btn btn-success btn-view container-fluid">Invite</button></a>
      </div>
    </div>

    
    <hr class="container-fluid hr1">
  

    <div class="container-fluid row foot-row-1">
      <div class="col-lg-5 col-sm-5  comman-col-1-foot">
        <h3 class="wed-foot-heading">
           View Blessings You get
       </h3>
       <a href="Blessings" style="text-decoration:none;"><button class="btn btn-secondary btn-view container-fluid">Blessing</button></a>
      </div>
      <div class="col-lg-5 col-sm-5  comman-col-1-foot">
        <h3 class="wed-foot-heading mrgn">
          View QR Code
       </h3>
       <a href="../User/QR" style="text-decoration:none;"> <button class="btn btn-danger btn-view container-fluid">QR code</button></a>
      </div>
    </div>
   
    <hr class="container-fluid hr1">
  

    <div class="container-fluid row foot-row-1">
      <div class="col-lg-5  col-sm-5 comman-col-1-foot">
        <h3 class="wed-foot-heading">
          Share Your Wedding Clip in our Profile
       </h3>
       <a href="https://www.instagram.com/shadiviah.in" style="text-decoration:none;"><button class="btn btn-warning btn-view container-fluid insta-color">Instagram</button></a>
      </div>
      <div class="col-lg-5 col-sm-5  comman-col-1-foot">
        <h3 class="wed-foot-heading mrgn">
          Logout Your Account <br> :-) 
       </h3>
       <button class="btn btn-warning btn-view  container-fluid" onclick="window.location.assign('logout.php');">Logout</button>
      </div>
    </div>


  </footer>
  <footer class="footer-2">
    <span class="late-span">
       Shadiviah-2021 &#169; - All Right Reserved
    </span>
  </footer>
    
<!-- ############################################################################ -->
    <!-- Optional JavaScript -->
    <script>
      function CouplePhotoUpload() { 
        document.getElementById('upload').style.display="block";
        window.location.assign('#upload');
        }
        
        function FamilyPhotoUpload() { 
          document.getElementById('Family').style.display="block";
          window.location.assign('#Family');
          }
          
    </script>
    <script>


function viewname(name){
   alert("Name: "+name);
}

function formvalidationfamily(){
    document.getElementById('submitfam').disabled=true;
    var i1 = document.forms['formfam']['i1'].value;
    var c1 = document.forms['formfam']['c1'].value;

    
    if(i1==""){
          document.getElementById('submitfam').disabled=false;
          alert("PLEASE SELECT THE IMAGE");
          return false;
      }

    if(c1.trim()==""){
          document.getElementById('submitfam').disabled=false;
          alert("PLEASE ENTER THE CAPTION FOR IMAGE");
          return false;
        }
     
      return true;
}

    function isvalid(){
    document.getElementById('submitcouple').disabled=true;

      var i1 = document.forms['coupleform']['i1'].value;
      var c1 = document.forms['coupleform']['c1'].value;
       if(i1==""){
        alert("PLEASE SELECT THE IMAGE");
        document.getElementById('submitcouple').disabled=false;
        return false;
       }   
       if(c1.trim()==""){
          document.getElementById('submitcouple').disabled=false;
          alert("PLEASE ENTER THE CAPTION FOR IMAGE");
          return false;
        }
        return true;       
    }
</script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/javascript-crousel.js"></script>

  </body>
</html> 


