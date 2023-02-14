<?php
error_reporting(0);

  include 'source-php/insight.php';
  include 'source-php/mediatorlists.php';
  include 'source-php/weddingcongratulations.php';

  indexinsight();
  newinsight();
  $checkforzero = if_zero_mediator();
    if($checkforzero==1){
    $fullstack = list_for_index_page();
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
    <link rel="stylesheet" href="mycss/themes_css.css"/>
    <link rel="stylesheet" href="mycss/index_css.css"/>
    <meta name="keywords" content="Home-Shadiviah">
    <meta name="description" content="Shadiviah: Make your Wedding memorable. Online Invitations in wedding, Register Wedding online, Get a beautiful Theme, Get an e-card, Share your wedding clips, Share Your wedding album and much more.">
    <meta name="author" content="Sttar Vipin Rao">
    <title>Shadiviah-home</title>
    <style>
      @media screen and (max-width:1000px){
      .image_card_mobi{
       background-image: url('wedding_images/<?php echo $wedphoto; ?>');
      }
    }
      </style>
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
                <a class="nav-link buttons btn1" href=""><span class="clrwhite" >Home</span></a>
              </li>
              <li class="nav-item navlisthover">
                <a class="nav-link buttons" href="Invitation-Shadiviah"><span class="clrwhite" >Invite-links</span></a>
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
<!-- Use any element to open the sidenav -->
<!-- <span onclick="openNav()">open</span> -->
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->



<div class="container-fluid row inside_header_mobi">
  <div class="col-3 nav_icon_div">
     <img src="site_image/navbar_shadiviah.png" onclick="openNav()" alt="navbar_shadiviah">
  </div>
  <div class="col-9 logo_div_mobi">
     <img src="site_image/shadi_viah_logo.png" alt="shadiviah.in_official-logo">
  </div>
</div>
    
</header>











<!-- ###################################################################################### -->
<!-- ###################################################################################### -->
<!-- ###############################phone hEADER ENDS########################################## -->
<!-- ###################################################################################### -->
<!-- ###################################################################################### -->

<div class="container-fluid background_image_container">
  <div class="container-fluid heading_div">
     <center><h1 class="h1-tag">Start inviting your freinds online!!</h1></center>
  </div>
  <div class="container-fluid short_description">
    <center><p class="p_tag_short_description"> 
      Make your wedding card more attractive with a <span class="span_text">QR code.</span>
    </p></center>
  </div>
</div>

<div class="container-fluid strip_one"></div>

<div class="container-fluid about_us_coulmn_homepage">
   <div class="container-fluid row row_div">
       <div class="col-xl-4 row_part_one">
          <img src="site_image/Couple_banner.png" alt="shadi_viah_online_invitations">
       </div>
       <div class="col-xl-7 row_part_two">
          <center>
            <span class="span_tag_one">What is </span><span class="span_tag_two">Shadiviah.in</span><span class="span_tag_one qtn_mrk">?</span>
          </center>  
          <div class="container-fluid  about_para_div">
            <p class="para_about">
             Shadiviah is a online platform where you can store 
             your marriage info and can invite freinds and
             relative online. It is like a wedding e-card which can
             store all your wedding detail private like couples name
             , RSVP , location, dates and many more thing. Shadiviah
              is a step towards digital india.<br><br>
              We provide a QR code to every user and user can print 
              that QR code on there wedding card. Because the Qr code is also 
              going to store your location...
            </p>
          </div>
          <a href="about.php" style="text-decoration:none;">
           <button class="btn btn-primary readmore_btn"> Read more</button>
          </a>
       </div>
   </div>
</div>

<!-- <div class="container-fluid strip_one"></div> -->
<div class="container-fluid get_in_touch_div">
   <h6>
      GET IN TOUCH
   </h6>
   <form action="source-php\feedback-save.php" method="POST">
     <table>
       <tr>
         <td>
           <label class="form_label_one">Your Name &#160;: &#160;&#160;&#160;</label>
         </td>
         <td>
          <input type="text" name="name" class="inputname" placeholder="Name"><br>
         </td>
        </tr>
       <tr>
         <td>
          <label class="form_label_two">Your Email &#160;&#160;:</label>
         </td>
         <td>
          <input type="email" name="email" placeholder="Email" class="inputemail"><br>
         </td>
        </tr>
       <tr>
         <td>
          <label class="form_label_three" >Message &#160;&#160;&#160;&#160;:</label>
         </td>
         <td>
          <textarea name="message" class="query_message" placeholder="Message or query"></textarea><br>
         </td>
        </tr>
    </table>
     <button class="btn btn-primary submit_btn">Submit</button>

   </form>
</div>

<!-- ############################################################################ -->
<?php
if($datayes == 1){
echo<<<shadi

<div class="container-fluid upcoming_weddings_div">
   <center>
   <h4 class="upcoming_heading">
       Upcoming Weddings
   </h4>
   <span class="digital_span">
     Few of wedding having public privacy is shown here.  
  </span>
</center>
   <div class="container-fluid wedding_card_lap">
      <div class="container-fluid row wedding_card_row_lap">
         <div class="col-xl-4 col-lg-4 image_card_lap">
            <img src="wedding_images/$wedphoto" alt="shadi-viah-couples">
         </div>
         <div class="col-xl-8 col-lg-8 text-card-lap">
             <h3 class="best-wishes-heading-lap">
              wish you a very very best wishes for your wedding from the team of 
              <span style="color: #c21e50; font-weight:bold;">shadiviah.</span>
             </h3>
             <h3 class="best-wishes-heading-lap wedding_date_lap">
              Wedding is on <span style="color: #c21e50;">$wed_date</span>
              
             </h3>
             <center>
            <a style="text-decoration:none;" href="$url_print" target="_blank">
             <button class="btn btn-primary btn-block view_wedding_btn_lap"> View Wedding Page</button>
            </a> 
            </center>
         </div>
      </div>
   </div>


   <div class="container-fluid wedding_card_mobi">
      <div class="container-fluid image_card_mobi">
          
          
      </div>
      <div class="container-fluid text_card_mobi">
        <h3 class="best-wishes-heading-mobi">
          wish you a very very best wishes for your wedding from the team of 
          <span style="color: #c21e50; font-weight:bold;">shadiviah.</span>
         </h3>
         <h3 class="best-wishes-heading-mobi wedding_date_mobi">
          Wedding is on <span style="color: #c21e50;">$wed_date</span>
          
         </h3>
         <center>
         <a style="text-decoration:none" href="$url_print">
         <button class="btn btn-primary btn-block view_wedding_btn_mobi"> 
           View Wedding Page
          </button>
          </a>
        </center>
      </div>
   </div>
</div>

shadi;
}
?>
<!-- ////////////////////////////////////////////////// -->




<!-- ############################################################################ -->

<div class="container-fluid theme_div">
  <center>
     <h2 class="themes_h2_tag">Some beautiful <span style="color:#c21e50;">themes</span> for our users</h2>
  </center>
  <div class="container-fluid row theme-row-element">
     
  <div class="col-lg-3 comman-col-theme">

<div class="div-for-image img1 container-fluid">
</div>
<p class="Theme-name">Blue Transforming <span style="font-family:sans;font-size:1.3rem;">(1-1)</span></p>
<div class="rating-div container-fluid">
<svg id="stars" style="display: none;" version="1.1">
       <symbol id="stars-full-star" viewBox="0 0 102 18">
         <path d="M9.5 14.25l-5.584 2.936 1.066-6.218L.465 6.564l6.243-.907L9.5 0l2.792 5.657 6.243.907-4.517 4.404 1.066 6.218" />
       </symbol>

       <symbol id="stars-half-star" viewBox="0 0 102 18">
         <path d="M9.5 14.25l-5.584 2.936 1.066-6.218L.465 6.564l6.243-.907L9.5 0l2.792" fill="#e9ba26" />
       </symbol>

       <symbol id="stars-all-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-full-star" />
         <use xlink:href="#stars-full-star" transform="translate(21)" />
         <use xlink:href="#stars-full-star" transform="translate(42)" />
         <use xlink:href="#stars-full-star" transform="translate(63)" />
         <use xlink:href="#stars-full-star" transform="translate(84)" />
       </symbol>

       <symbol id="stars-0-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-all-star" fill="#9b9b9b" />
       </symbol>

       <symbol id="stars-0-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-0-0-star" />
         <use xlink:href="#stars-half-star" />
       </symbol>

       <symbol id="stars-1-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-0-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" />
       </symbol>

       <symbol id="stars-1-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-1-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(21)" />
       </symbol>

       <symbol id="stars-2-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-1-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" transform="translate(21)" />
       </symbol>

       <symbol id="stars-2-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-2-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(42)" />
       </symbol>

       <symbol id="stars-3-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-2-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" transform="translate(42)" />
       </symbol>

       <symbol id="stars-3-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-3-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(63)" />
       </symbol>

       <symbol id="stars-4-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-3-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" transform="translate(63)" />
       </symbol>

       <symbol id="stars-4-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-4-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(84)" />
       </symbol>

       <symbol id="stars-5-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-all-star" fill="#e9ba26" />
       </symbol>
     </svg>

   <main id="main">
   <svg class="icon">
          <use xlink:href="#stars-4-5-star">
   </svg>
   </main>
   
</div>
<p class="rating-text">(4.5/5)</p>
   <button class="btn btn-success btn-block" onclick="window.location.assign('Themes/Blue-Transforming');">
        Preview
   </button>
</div>



<div class="col-lg-3 comman-col-theme">
<div class="div-for-image img2 container-fluid">
</div>
<p class="Theme-name">Pink Page <span style="font-family:sans;font-size:1.3rem;">(3-1)</span></p>
<div class="rating-div container-fluid">
  <svg id="stars" style="display: none;" version="1.1">
       <symbol id="stars-full-star" viewBox="0 0 102 18">
         <path d="M9.5 14.25l-5.584 2.936 1.066-6.218L.465 6.564l6.243-.907L9.5 0l2.792 5.657 6.243.907-4.517 4.404 1.066 6.218" />
       </symbol>

       <symbol id="stars-half-star" viewBox="0 0 102 18">
         <path d="M9.5 14.25l-5.584 2.936 1.066-6.218L.465 6.564l6.243-.907L9.5 0l2.792" fill="#e9ba26" />
       </symbol>

       <symbol id="stars-all-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-full-star" />
         <use xlink:href="#stars-full-star" transform="translate(21)" />
         <use xlink:href="#stars-full-star" transform="translate(42)" />
         <use xlink:href="#stars-full-star" transform="translate(63)" />
         <use xlink:href="#stars-full-star" transform="translate(84)" />
       </symbol>

       <symbol id="stars-0-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-all-star" fill="#9b9b9b" />
       </symbol>

       <symbol id="stars-0-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-0-0-star" />
         <use xlink:href="#stars-half-star" />
       </symbol>

       <symbol id="stars-1-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-0-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" />
       </symbol>

       <symbol id="stars-1-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-1-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(21)" />
       </symbol>

       <symbol id="stars-2-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-1-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" transform="translate(21)" />
       </symbol>

       <symbol id="stars-2-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-2-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(42)" />
       </symbol>

       <symbol id="stars-3-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-2-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" transform="translate(42)" />
       </symbol>

       <symbol id="stars-3-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-3-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(63)" />
       </symbol>

       <symbol id="stars-4-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-3-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" transform="translate(63)" />
       </symbol>

       <symbol id="stars-4-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-4-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(84)" />
       </symbol>

       <symbol id="stars-5-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-all-star" fill="#e9ba26" />
       </symbol>
     </svg>

   <main id="main">
   <svg class="icon">
          <use xlink:href="#stars-5-0-star">
   </svg>
   </main>
   
</div>
<p class="rating-text" >(5/5)</p>
   <button class="btn btn-success btn-block"  onclick="window.location.assign('Themes/Pink-Page');">
        Preview
   </button>
</div>



<div class="col-lg-3 comman-col-theme">
<div class="div-for-image img3 container-fluid">
</div>
<p class="Theme-name">Black Addition <span style="font-family:sans;font-size:1.3rem;">(4-1)</span></p>
<div class="rating-div container-fluid">
<svg id="stars" style="display: none;" version="1.1">
       <symbol id="stars-full-star" viewBox="0 0 102 18">
         <path d="M9.5 14.25l-5.584 2.936 1.066-6.218L.465 6.564l6.243-.907L9.5 0l2.792 5.657 6.243.907-4.517 4.404 1.066 6.218" />
       </symbol>

       <symbol id="stars-half-star" viewBox="0 0 102 18">
         <path d="M9.5 14.25l-5.584 2.936 1.066-6.218L.465 6.564l6.243-.907L9.5 0l2.792" fill="#e9ba26" />
       </symbol>

       <symbol id="stars-all-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-full-star" />
         <use xlink:href="#stars-full-star" transform="translate(21)" />
         <use xlink:href="#stars-full-star" transform="translate(42)" />
         <use xlink:href="#stars-full-star" transform="translate(63)" />
         <use xlink:href="#stars-full-star" transform="translate(84)" />
       </symbol>

       <symbol id="stars-0-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-all-star" fill="#9b9b9b" />
       </symbol>

       <symbol id="stars-0-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-0-0-star" />
         <use xlink:href="#stars-half-star" />
       </symbol>

       <symbol id="stars-1-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-0-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" />
       </symbol>

       <symbol id="stars-1-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-1-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(21)" />
       </symbol>

       <symbol id="stars-2-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-1-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" transform="translate(21)" />
       </symbol>

       <symbol id="stars-2-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-2-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(42)" />
       </symbol>

       <symbol id="stars-3-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-2-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" transform="translate(42)" />
       </symbol>

       <symbol id="stars-3-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-3-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(63)" />
       </symbol>

       <symbol id="stars-4-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-3-0-star" />
         <use xlink:href="#stars-full-star" fill="#e9ba26" transform="translate(63)" />
       </symbol>

       <symbol id="stars-4-5-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-4-0-star" />
         <use xlink:href="#stars-half-star" transform="translate(84)" />
       </symbol>

       <symbol id="stars-5-0-star" viewBox="0 0 102 18">
         <use xlink:href="#stars-all-star" fill="#e9ba26" />
       </symbol>
     </svg>

   <main id="main">
   <svg class="icon">
          <use xlink:href="#stars-5-0-star">
   </svg>
   </main>
   
</div>
<p class="rating-text">(5/5)</p>
   <button class="btn btn-success btn-block" onclick="window.location.assign('Themes/Black-Addition');">
        Preview
   </button>
</div>



  </div>
  
  
      <center>  
      <a href="Themes-Shadiviah" style="text-decoration:none;">
        <button class="container-fluid view_more_theme">
          view more
        </button>
</a>
      </center>
  
</div>
<!-- <div class="container-fluid strip_one strip_two"></div> -->
<div class="container-fluid are_you_register_div">
   <center>
     <h4 class="registered_heading">Is your wedding already registered?</h4>
     <span class="if_registered_text">if you register your wedding already, then you should create<br> invitation links and start inviting your<br> friends online. </span><br>
     <button class="btn btn-primary create_links_btn">
          Get Invitation links
     </button>
   </center>

</div>


<!-- ############################################################################ -->
<?php
if($checkforzero==1){
echo<<<d1

<div class="container-fluid mediator_div">
   <center>  
    <h4 class="mediator_heading">Some of our mediator!!</h4>
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
if($i>=6){
  break;
}
}
  // <!-- </center>     -->
echo '</div>';

echo<<<btn4
<button onclick="location.assign('Mediator-Shadiviah');" class="container-fluid btn btn-warning more_mediator_btn"> Check for More </button>
btn4;
echo '</div>';

}
?>











<!-- ############################################################################ -->




<div class="container-fluid what_different">
   <center>
     <h5 class="h5_of_differnt">What makes us different than others?</h5>
   </center>
   <div class="container-fluid row different_main_div"> 
      <div class="col-xl-4 col-lg-4 img_col_diff">
        <img src="site_image/couples_one.png" alt="shadiviah-dot-in-wedding-couples">
      </div>
      <div class="col-xl-8 col-lg-8 data_col_diff">
         <div class="container-fluid data_row_one">
              <div class="container-fluid row complex_row_one">
                   <div class="col-xl-4 col-lg-4 complex_row_one_col_one">
                      <h2 class="complex_heading_h2">What makes <span style="color:#c21e50;">'shadiviah</span>.in' different?</h4>
                   </div>
                   
                   <div class="col-xl-7 col-lg-7 complex_row_one_col_two">
                      <p class="complex_p_tag_one">
                        <span style="color:#c21e50; font-weight:bold;">shadiviah.in</span> 
                          is not a matrimony site like others
                          .Its a startup to makes your wedding card 
                          more attractive by using links or QR codes.
                          It will store your wedding info on our servers like
                          couple name & images , RSVP , contact info , location etc.
                          It helps you to invite your friend online. 
                      </p>
                   </div>
              </div>
         </div>
         <div class="container-fluid data_row_two">
              <div class="container-fluid row complex_row_two">
                   <div class="col-xl-5 col-lg-5 complex_row_two_col_one">
                         <div class="container-fluid row pro_complex_row_1">
                              <div class="col-3 pro_ultra_img_one">
                                  <img  src="site_image/24x7service_shadiuviah.png" alt="shadiviah.in-service"/>  
                              </div>
                              <div class="col-9 pro_ultra_heading_one">
                                  <p class="complex_h6_1">24x7 Services</p>
                              </div>
                              <p class="complex_description_1">
                                 Our team is ready to provide you 24x7 services. We are 
                                 always ready to solve your all problems you can contact 
                                 us anytime.
                              </p>
                         </div> 
                   </div>
                   <div class="col-xl-1 col-lg-1"></div>
                   <div class="col-xl-5 col-lg-5 complex_row_two_col_two">
                     <div class="container-fluid row pro_complex_row_2">
                          <div class="col-3 pro_ultra_img_two">
                            <img  src="site_image/one_shadiViah.png" alt="shadiviah.in-india-first"/>  

                          </div>
                          <div class="col-9 pro_ultra_heading_two">
                            <p class="complex_h6_1">India's First</p>
                          </div>
                          <p class="complex_description_2">
                            We are proud to be announce that we create 
                            india's first online invitation platform which 
                            is the need of the current generation.
                         </p>
                      </div>
                   </div> 
              </div>
        </div>
        <div class="container-fluid data_row_three">
              <div class="container-fluid row complex_row_three">
                   <div class="col-xl-5 col-lg-5 complex_row_three_col_one">
                     <div class="container-fluid row pro_complex_row_3">
                          <div class="col-3 pro_ultra_img_three">
                            <img  src="site_image/theme_shadiviah.png" alt="shadiviah.in-themes"/>  

                          </div>
                          <div class="col-9 pro_ultra_heading_three">
                            <p class="complex_h6_1">Themes</p>
                          </div>
                          <p class="complex_description_3">
                            Here you get many of our wonderful themes ,
                             you have to select just one of our wonderful 
                             themes and make your wedding card digital.
                         </p>
                      </div>
                   </div>
                   <div class="col-xl-1 col-lg-1 "></div>
                   <div class="col-xl-5 col-lg-5 complex_row_three_col_two">
                       <div class="container-fluid row pro_complex_row_4">  
                          <div class="col-3 pro_ultra_img_four">
                            <img  src="site_image/link_shadiviah.png" alt="shadiviah.in-links"/>  

                          </div>
                          <div class="col-9 pro_ultra_heading_four">
                            <p class="complex_h6_1">Invite Links</p>
                          </div>
                          <p class="complex_description_4">
                            As we know we cant give card to each of our classmates 
                            or friends or relative. So, here is the solution to 
                            invite all of them online. Stop sending image of wedding
                            cards.                      
                           </p>
                        </div>
                   </div> 
              </div>
        </div>
      </div>
   </div>
</div>

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
       <div class="col-xl-6 col-lg-12 footer_1_col_3">
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
<!-- <a href="tel:123-456-7890p123">CLICK TO CALL</a> -->