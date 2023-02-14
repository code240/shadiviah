<?php
error_reporting(0);

if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    header('location:../Home-Shadiviah');
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../site_image/love.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootcss/animate.css">
    <link rel="stylesheet" href="../bootcss/bootstrap.min.css"/>
    <link rel="stylesheet" href="../bootcss/bootstrap.css"/>
     <link rel="stylesheet" href="../mycss/index_css.css"/>
    <!--<link rel="stylesheet" href="../mycss/help_css.css"/> -->
    <!-- <link rel="stylesheet" href="../mycss/portal_css.css"/> -->
    <!-- <link rel="stylesheet" href="portalcss/changepasscode.css"/> -->
    <link rel="stylesheet" href="../mycss/terms_css.css"/>

    <link rel="stylesheet" href="../mycss/loginpannel.css"/>
    <link rel="stylesheet" href="../mycss/pannel.css"/>

    <title>Mediator-Access</title>
    <!-- <meta http-equiv="refresh" content="30"> -->
     </head>
  <body>
<!-- ############################################################################ -->

<header class="container-fluid top_term">
 <a href="../Home-Shadiviah" style="text-decoration: none;">

 <span class="home_text_span">
     Home 
 </span> 
 </a>
 <span class="site_text_span" onclick="window.location.assign('../Home-Shadiviah');">
    Shadiviah.in
</span> 

</header>
<h1>
    Welcome as Mediator:
</h1>

<div class="container-fluid maindiv_for_help">
    
    <h5 class="admin_heading pannel_heading">
        Mediator:
    </h5>
    
    <div class="container-fluid middle_div x" >
        <h5 class="admin_heading pannel_heading_action_list">
            Access only mediators:
        </h5>  
        <center>
        <a style="text-decoration: none;" href="Register-Wedding"   >
        <button class="btn btn-primary action_btns">
           Register Wedding
        </button>
        </a>
        <a style="text-decoration: none;" href="View-Wedding"   >
            <button class="btn btn-primary action_btns">
               View Wedding
            </button>
            </a>
        <a style="text-decoration:none;" href="Change-Passcode" >
        <button class="btn btn-success action_btns">
            Change passcode 
         </button>
         </a>
         <a style="text-decoration:none;" href="Change-Profile-picture">
         <button class="btn btn-info action_btns">
             Change Photo
         </button>
         </a>
         <a style="text-decoration:none;" onclick="alert('Currently This page is inactive');">
         <button class="btn btn-secondary action_btns">
            Guideline
         </button>
         </a>
         <a style="text-decoration:none;" href="../Contact-Shadiviah">
         <button class="btn btn-warning text-truncate action_btns" >
            Contact Us
         </button>
         </a>
         <a style="text-decoration:none;" href="logoutportal.php">
        <button class="btn btn-danger text-truncate action_btns" >
            Log Out
        </button>
        </a>
        </center>
    </div>


</div>













<footer class="container-fluid term_footer_1">
<button onclick="window.location.assign('../Home-Shadiviah');" class="btn btn-link footer-btn1">Home</button>
  <button onclick="window.location.assign('../Help-Shadiviah');" class="btn btn-link footer-btn1">Help</button>
 <button onclick="window.location.assign('../Contact-Shadiviah');" class="btn btn-link footer-btn1">Contact</button>
</footer>

<footer class="container-fluid footer_2">
  <center>
    <label class="copyright_text">
      <span class="cpyryt_symbol">&#169; </span>Copyrights,
       Shadiviah.in-2021, All rights reserved.
      </label>
  </center>
</footer>

   
   
   
   
   
   
   
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



   </body>
   </html>