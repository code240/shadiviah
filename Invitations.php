<?php
error_reporting(0);

include 'source-php/invitation-search.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="site_image/love.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootcss/animate.css">
    <link rel="stylesheet" href="bootcss/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootcss/bootstrap.css"/>
    <link rel="stylesheet" href="mycss/index_css.css"/>
    <link rel="stylesheet" href="mycss/about_css.css"/>
    <link rel="stylesheet" href="mycss/contact_css.css"/>
    <link rel="stylesheet" href="mycss/invitations_css.css"/>
    <meta name="description" content="Shadiviah: Make your Wedding memorable. Online Invitations in wedding, Register Wedding online, Get a beautiful Theme, Get an e-card, Share your wedding clips, Share Your wedding album and much more.">
    <meta name="keywords" content="Online-invitations,Shadiviah">
    <meta name="author" content="Sttar Vipin Rao">

    <title>Online Invitation</title>
    <!-- <meta http-equiv="refresh" content="30"> -->
  </head>
  <body>
<!-- ############################################################################ -->

<div class="container-fluid top">
   

</div>

<header class="container-fluid header header_pc" >
  <div class="container-fluid header-div-row row" >
      <div class="col-lg-3 header-row-col-1" >
          <a href="Home-Shadiviah" style="text-decoration:none;"><img src="site_image/shadi_viah_logo.png" alt="shadi-viah-logo"  style="cursor:pointer;"></a>
     </div>
     <div class="col-xl-1 header-row-gap"></div>
     <div class="col-xl-8 header-row-col-2">

      <nav class="navbar navbar-expand-lg navbar-light options">
          <a class="navbar-brand" href="#"><span id="magic-nav-text">select category -></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse option2 bgpink" id="navbarNavDropdown">
        
            <ul class="navbar-nav pinkbg">
              <li class="nav-item navlisthover" >
                <a class="nav-link buttons" href="Home-Shadiviah"><span class="clrwhite" >Home</span></a>
              </li>
              <li class="nav-item navlisthover">
                <a class="nav-link buttons btn1" href="Invitation-Shadiviah"><span class="clrwhite" >Invite-links</span></a>
              </li>
              <li class="nav-item navlisthover">
                <a class="nav-link buttons" href="Themes-Shadiviah"><span class="clrwhite">Themes</span></a>
              </li> 
              <li class="nav-item navlisthover">
                <a class="nav-link  buttons" href="Mediator-Shadiviah"><span class="clrwhite">Mediators</span></a>
              </li>
              <li class="nav-item navlisthover" >
                <a  class="nav-link buttons" href="Signin"><span class="clrwhite" style="font-weight:600;color:#d1007a;">Signin</span></a>
              </li>
              
            </ul>
          </div>
        </nav>
     </div>
  </div>
</header>
<!-- ###################################################################################### -->
<!-- ###################################################################################### -->
<!-- ###################################################################################### -->
<!-- ############################ PHONE HEADER STARTS ##################################### -->
<!-- ###################################################################################### -->
<!-- ###################################################################################### -->
<!-- ###################################################################################### -->
<header class="container-fluid header_phone">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <hr style="margin:0;">
  <a href="">Home</a>
  <hr style="margin:0;">
  <a href="Invitation-Shadiviah">Invitation Links</a>
  <hr style="margin:0;">
  <a href="Themes-Shadiviah">Themes</a>
  <hr style="margin:0;">
  <a href="Mediator-Shadiviah">Mediators</a>
  <hr style="margin:0;">
  <a href="Signin">Signin</a>
  <hr style="margin:0;">
  <a href="Contact-Shadiviah">Contact us</a>
  <hr style="margin:0;">

</div>



<div class="container-fluid row inside_header_mobi">
  <div class="col-3 nav_icon_div">
     <img src="site_image/navbar_shadiviah.png" onclick="openNav()" alt="navbar_shadiviah">
  </div>
  <div class="col-9 logo_div_mobi">
     <img src="site_image/shadi_viah_logo.png" alt="shadiviah.in_official-logo">
  </div>
</div>
    
</header>
<!-- ************************************* ************************ -->

<div class="container-fluid image_shower">
  <h6 class="about_us_heading6">Invitation messages</h6>
  <span class="span_about_column">Shadiviah.in / Contact</span>
</div>

<!-- ############################################################################ -->

<div class="container-fluid main_in_invitelinks">
  <h5 class="heading_main">
    Create Invitation Messages
 </h5>
</div>
<div class="container-fluid background_of_form_div">
    <span class="ask_for_url">Please enter your wedding code  or your phone number here</span>
    <form action="" method="POST" name="form" onsubmit="return validform();">
      <center>
      <table>
        <tr>
          <td>
            <input type="text" autocomplete="off" name="wed" id="wedcode" class="input_code" placeholder="Phone number / Wedding code">

          </td>
          <td>
            <input type="submit" value="check" id="submit" class="btn btn-primary btn_check">

          </td>
        </tr>
      </table>
      </center>
    </form>

</div>

<?php
if(!isset($_POST['wed'])){
echo<<<howitwork

<div class="container-fluid how_its_work_div">
   <h5 class="How_work_heading">How its work?</h5>
   <center>
   <ul>
     <li class="li_works">
       First of all you have to select your wedding by searching it with the help of your Phone number (Which you give us while registeration of wedding), wedding code or couple names. 
     </li><br>
     <li class="li_works">
       shadiviah recomend you to search your wedding by the help of registered Phone number , It will give you the exact result.
     </li><br>
     <li class="li_works">
       After selecting your wedding you have to enter the name of friend or relative whom you want to invite.
    </li><br>
    <li class="li_works">
       After it , we provide you same messages which contain your wedding url and e-cards  and you can share it on whatsapp and other social medias.
    </li><br>
   </ul>
   </center>
</div>
howitwork;
}
?>
<?php
if(isset($_POST['wed'])){
if($rowcount_main==0){
echo<<<noresult
  <div class="container-fluid no_result_found">
  <h5 class="no_result_heading"> Sorry !! , No Result Found <span style="color: rgb(194, 14, 89);">'$get_wedcode'</span></h5>
    <div class="container-fluid no_result_image">
         <img src="site_image/sad.png" alt="no-result-found-shadiviah">
    </div>
</div>
noresult;
 }
}
?>
<!-- ///////////pc look/////////////// -->
<?php
if(isset($_POST['wed'])){
  if($rowcount_main>0){
   echo '<center>';
    echo<<<row1
    <h5 class="no_result_heading"> Search result for '<span style="color: rgb(194, 14, 89);">$get_wedcode</span>' !!!</h5>
row1;
  echo '</center>';
for($j=0;$j<$ii;$j++){
  
echo<<<resultsfound

<div class="container-fluid wedding_card_lap">
      <div class="container-fluid row wedding_card_row_lap">
         <div class="col-xl-4 col-lg-4 image_card_lap">
            <img src="wedding_images/$wedphoto[$j]" alt="shadi-viah-couples">
         </div>
         <div class="col-xl-8 col-lg-8 text-card-lap">
             <h3 class="best-wishes-heading-lap">
              $boyname[$j]<br>
             <span style="color: #c21e50; font-weight:bold;"> Weds </span><br>
              $girlname[$j]<br><br>
             </h3>
             <h3 class="best-wishes-heading-lap wedding_date_lap">
              Wedding is on <span style="color: #c21e50;">$date[$j]</span>
              
             </h3>
             <center>
            <a style="text-decoration:none;" href="wedding-selected.php?wed=$wedcodeX[$j]" >
             <button class="btn btn-success btn-block view_wedding_btn_lap"> Select Wedding</button>
            </a> 
            <a style="text-decoration:none;" href="$url[$j]" target="_blank">
             <button class="btn btn-primary btn-block view_wedding_btn_lap_second"> View Wedding Page</button>
            </a> 
            </center>
         </div>
      </div>
   </div>

<!-- ///////////mobile look/////////// -->
<div class="container-fluid result_cmplt_div" >

   <div class="container-fluid result_div">
      <div class="container-fluid result-image-div">
          <img src="wedding_images/$wedphoto[$j]" alt="result-image-shadiviah">
      </div>
      <h5 class="couple_name_div">
            $boyname[$j]  <span style="color: rgb(194, 14, 89);">Weds</span> $girlname[$j] <br>
            
      </h5>
      <h5 class="couple_name_div date_h5">
      $date[$j]
      </h5>
      <center>
       <a href="wedding-selected.php?wed=$wedcodeX[$j]"> <button class="btn btn-primary btn_select_wedding"> SELECT </button></a>
        <a href="$url[$j]" target="_blank"><button class="btn btn-success btn_select_wedding view_btn"> VIEW </button></a>

      </center>
   </div>
</div>
resultsfound;
}
}
}
?>
<div class="container-fluid null-div-for-mobi-only"></div>






<script>
function validform(){
   var wed = document.forms['form']['wed'].value;
   if(wed.trim()==""){
     alert('Please enter wedding code or phone number');
     return false;
   }
   return true;
}





</script>







<!-- <div class="null"></div> -->

<!-- ############################################################################ -->


<!-- *********************************************************************** -->
<footer class="container-fluid footer_1">
    <div class="container-fluid row main_in_footer">
       <div class="col-xl-4 col-lg-4 footer_1_col_1">
          <div class="container-fluid foot_div_1_top">
              <table>
                <tr>
                  <td>
                    <div class="img_div">
                       <img src="site_image/shadi_viah_logo_white.png" alt="shadiviah.in-official-logo" onclick="window.location.assign('Home-Shadiviah');" style="cursor:pointer;">
                    </div>
                  </td>
                </tr>
              </table>
          </div>
          <div class="container-fluid foot_div_1_mid">
            <h6 class="follow_us_h6"> Follow us:</h6>
            <table>
              <tr>
                <td>
                  <div class="icon_one">
                     <img src="site_image/facebook_shadiviah.png" alt="facebook_shadiviah" onclick="window.location.assign('https://www.facebook.com/Shadiviahin-100283152027266');" style="cursor:pointer;">
                  </div>
                </td>
                <td>
                  <div class="icon_two">
                      <img src="site_image/instagram_shadiviah.png" alt="twitter_shadiviah" onclick="window.location.assign('https://www.instagram.com/shadiviah.in');" style="cursor:pointer;">
                  </div>
                </td>
                <td>
                  <div class="icon_three">
                      <img src="site_image/youtube_shadiviah.png" alt="youtube_shadiviah" onclick="window.location.assign('https://www.youtube.com/channel/UCq1fDJfuGuesgMsm0p5ILjQ');" style="cursor:pointer;">
                  </div>
                </td>
                <td>
                  <div class="icon_four">
                      <img src="site_image/twitter_shadiviah.png" alt="twitter_shadiviah" onclick="window.location.assign('https://twitter.com/ShadiviahI');" style="cursor:pointer;">
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="container-fluid foot_div_1_low">
            <h6 class="contact_us_h6"> Contact us:</h6>
            <p class="contact_info_ptag">
              Email:<a href="mailto:contact@shadiviah.in"><span style="color:aqua;">contact@shadiviah.in</span></a><br>
              Contact: (+91) 7206865227<br>
              Instagram: <a href="https://www.instagram.com/shadiviah.in"><span style="color:aqua;">instagram.com/shadiviah.in/</span></a><br>
              Facebook: <a href="https://www.facebook.com/Shadiviahin-100283152027266"><span style="color:aqua;">facebook.com/shadiviah.in/</span></a><br>
            </p>
          </div>
       </div>
       <div class="col-xl-4 col-lg-4 footer_1_col_2">
          <h6 class="About_us_h6_footer"> About us:</h6>
          <p class="p_tag_foot_about_para">
            Shadiviah is a online platform where you can store your 
            marriage info and can invite freinds and relative online. 
            It is like a wedding e-card which can store all your wedding
            detail private like couples name , RSVP , location, dates
            and many more thing. Shadiviah is a step towards digital 
            india.<br><br>
            We provide a QR code to every user and user can print that
             QR code on there wedding card.Because the Qr code is also 
             going to store your location.
          </p>
       </div>
       <div class="col-xl-4 col-lg-4 footer_1_col_3">
          <h6 class="instant_h6_footer">Instant Links:</h6>
          <ul>
            <a href="Home-Shadiviah" class="atag">
              <li class=" li-text">Home</li>
            </a><br>
            <a href="Invitation-Shadiviah" class="atag">
              <li class=" li-text">Invite Links</li>
            </a><br>
            

            <a href="Themes-Shadiviah" class="atag">
              <li class=" li-text">Themes</li>
            </a><br>
            <a href="Mediator-Shadiviah" class="atag">
              <li class=" li-text">Mediators</li>
            </a><br>
            <a href="Signin" class="atag">
              <li class=" li-text">Signin</li>
            </a>  <br>
          </ul>
          <h6 class="other_h6_footer">Other Links:</h6>
          <ul>
            <a href="Terms-and-condition-Shadiviah" class="atag">
              <li class=" li-text">Terms and condition</li>
            </a><br>
            <a href="Help-Shadiviah" class="atag">
              <li class=" li-text">Help</li>
            </a><br>
            <a href="Contact-Shadiviah" class="atag">
              <li class=" li-text">Contact us</li>
            </a><br>
            <a href="About-Shadiviah" class="atag">
              <li class=" li-text">About us</li>
            </a><br>
                   
          </ul>
       </div>
    </div>
  </footer>
  <footer class="container-fluid footer_2">
      <center>
        <label class="copyright_text">
          <span class="cpyryt_symbol">&#169; </span>Copyrights,
           Shadiviah.in-2021, All rights reserved.
          </label>
      </center>
  </footer>
  
  
  
  
  
  <!-- ############################################################################ -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        /* Set the width of the side navigation to 0 */
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
      </script>
    </body>
  </html> 
  