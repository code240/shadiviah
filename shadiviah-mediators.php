<?php
error_reporting(0);

  include "source-php/insight.php";
  include 'source-php/mediatorlists.php';
  
  mediatorinsight();
  newinsight();

  $checkforzero = if_zero_mediator();
    if($checkforzero==1){
    $fullstack = mediator_list_for_mediator_page_with_random_feature();
    $totalmediator =  $fullstack[0];
  }
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
    <link rel="stylesheet" href="mycss/shadiviah-mediators.css"/>
    <meta name="keywords" content="Mediators,Shadiviah">
    <meta name="author" content="Sttar Vipin Rao">
    <meta name="description" content="Shadiviah: Make your Wedding memorable. Online Invitations in wedding, Register Wedding online, Get a beautiful Theme, Get an e-card, Share your wedding clips, Share Your wedding album and much more.">
    <title>Shadiviah-Mediators</title>
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
                <a class="nav-link buttons" href="Invitation-Shadiviah"><span class="clrwhite" >Invite-links</span></a>
              </li>
              <li class="nav-item navlisthover">
                <a class="nav-link buttons" href="Themes-Shadiviah"><span class="clrwhite">Themes</span></a>
              </li> 
              <li class="nav-item navlisthover">
                <a class="nav-link  buttons btn1" href="Mediator-Shadiviah"><span class="clrwhite">Mediators</span></a>
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
<!-- ************************************************************* -->

<div class="container-fluid image_shower">
  <h6 class="about_us_heading6">Mediators</h6>
  <span class="span_about_column">Shadiviah.in / Mediator</span>
</div>

<div class="container-fluid strip_one"></div>

<?php
if($checkforzero==1){
echo<<<d1

<div class="container-fluid mediator_div">
   <center>  
    <h4 class="mediator_heading">
      Checkout our mediators within your location.
    </h4>
    <span class="digital_span">
      Kindly contact one of them to make your 
      wedding card more attractive.
    </span>
    </center>

    <!-- ############################### -->
<!-- <center> -->
d1;


echo '<div class="container-fluid row mediator_row_div">';

for($i=0;$i<$totalmediator;$i++){
$name = $fullstack[1][$i];
$shopname = $fullstack[2][$i];
$address = $fullstack[3][$i];
$mobile = $fullstack[4][$i];
$image = $fullstack[5][$i];
echo<<<mediatordata

        <div class="col-xl-3 col-md-5 main_mediator_div">
           <div class="container-fluid dp_and_name_div">
               <div class="container-fluid row row_for_name_dp">             
                    <div class="col-3 for_dp_mediator">
                      <img src="profiles/$image" alt="shadiviah-mediator">
                    </div>
                  
                    <div class="col-9 container-fluid text-truncate for_name_mediator">
                       <span class="mediator_name_span ">
                           $name
                       </span> 
                    </div>
           </div>
           </div>   
           <div class="container-fluid mediator_extra_data_div">
              <span class="bold_attriute_of_mediator_span" style="text-transform:capitalize;">
                 Shopname:
              </span>
              <span class="answer_of_mediator_span" style="text-transform:capitalize;">
                $shopname
              </span><br><br>
              <span class="bold_attriute_of_mediator_span">
                Address:
             </span>
             <span class="answer_of_mediator_span" style="text-transform:capitalize;">
                $address
             </span><br><br>
           </div>
              <div class="container-fluid call_btn_div">
                <a style="text-decoration: none;" href="tel:$mobile">
                  <button class="btn btn-block btn-success call_btn">Call</button>
                </a>
              </div>
              <!--Text copied-->
             
        </div>  <!--End of 1st mediator main div-->
mediatordata;
// if($i>=6){
//   break;
// }
}
  // <!-- </center>     -->
echo '</div>';

echo '<button class="container-fluid btn btn-warning more_mediator_btn"> Call Shadiviah </button>';

echo '</div>';

}
?>



 




<!-- *********************************************************************** -->
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
