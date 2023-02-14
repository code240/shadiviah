<?php
error_reporting(0);

   include 'source-php/alreadylogin.php';
   if_admin_already_login();
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
    <link rel="stylesheet" href="mycss/help_css.css"/>
    <link rel="stylesheet" href="mycss/portal_css.css"/>
    <link rel="stylesheet" href="mycss/loginpannel.css"/>
    <meta name="keywords" content="Pannel-Shadiviah">
    <meta name="description" content="Shadiviah: Make your Wedding memorable. Online Invitations in wedding, Register Wedding online, Get a beautiful Theme, Get an e-card, Share your wedding clips, Share Your wedding album and much more.">
    <meta name="author" content="Sttar Vipin Rao">
    <title>Pannel Login</title>
    <!-- <meta http-equiv="refresh" content="30"> -->
  </head>
  <body>
<!-- ############################################################################ -->

<div class="container-fluid top_term">
 <a href="Home-Shadiviah" style="text-decoration: none;">

 <span class="home_text_span">
     Home 
 </span> 
 </a>
 <a style="text-decoration: none;" href="Home-Shadiviah">
 <span class="site_text_span">
    Shadiviah.in
</span> 
</a>
</div>
<h1>
    Login Pannel:
</h1>

<div class="container-fluid maindiv_for_help">
    <center>
    <h5 class="admin_heading">
        Login pannel:
    </h5>
    
    <form action="source-php/checkforloginpannel.php" method="POST" name="form" onsubmit="return formvalidation();">
      <input type="text" id="usernameid" name="username" class="input_passcode" placeholder="Username"><br>
        
      <input type="password" id="userpasscode" name="passcode" class="input_passcode" placeholder="Passcode"><br>
        <!-- <input type="checkbox" class="checkbox_input" id="chk"> -->
        <!-- <label class="remember_me_label" for="chk">Remember me</label> -->
        <input type="submit" id="submit" value="Login" class="btn btn-primary login_btn">
    </form> 
    
    </center>

</div>

<script>
  function formvalidation(){
    document.getElementById('submit').disabled=true;
    var name = document.forms['form']['usernameid'].value;
    var passcode = document.forms['form']['userpasscode'].value;
    if(name == ""){
      alert("PLEASE ENTER USERNAME");
      document.getElementById('submit').disabled=false;
      return false;
    }
    if(passcode == ""){
      alert("PLEASE ENTER PASSCODE");
      document.getElementById('submit').disabled=false;
      return false;
    }else{
      return true;
    }
    return true;
  }
</script>












<footer class="container-fluid term_footer_1">
    <center>
     <span class="subheading3">
         shadiviah.in-2021
      </span>
      <a href="Home-Shadiviah">
      <span class="links">
       Home
      </span>
      </a>
      <a href="help.html">
      <span class="links marginleft">
        Help
      </span>
      </a>
      <a href="about.html">
      <span class="links marginleft">
       About
      </span>
      </a>
      <a href="loginpannel.html">
      <span class="links marginleft">
        login 
      </span>
      </a>
   </center>
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