<?php
error_reporting(0);

include 'source-php/alreadylogin.php';
if_mediator_already_login();
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
     <meta name="keywords" content="Mediator-Login">
     <meta name="author" content="Sttar Vipin Rao">
     <meta name="description" content="Shadiviah: Make your Wedding memorable. Online Invitations in wedding, Register Wedding online, Get a beautiful Theme, Get an e-card, Share your wedding clips, Share Your wedding album and much more.">
    <title>Poratl Login</title>
    <!-- <meta http-equiv="refresh" content="30"> -->
  </head>
  <body >
<!-- ############################################################################ -->


<header class="container-fluid top_term">
 <a href="Home-Shadiviah" style="text-decoration: none;">

 <span class="home_text_span">
     Home 
 </span> 
 </a>
 <span class="site_text_span" onclick="window.location.assign('Home-Shadiviah');">
    Shadiviah.in
</span> 

</header>
<h1>
    Mediator portal:
</h1>

<div class="container-fluid maindiv_for_help">
    <center>
    <h5 class="admin_heading">
        Mediator's Login 
    </h5>
    <span class="warn_span">
        Mediator login is only support for Mediators whose directly registered by the 
        shadiviah team. The Mediator has the access to input the data of marriage 
        in databases. Those who wants to register their wedding detail He/She 
        should contact our Mediators else you can directly contact us on social medias , 
        kindly visit <a href="Contact-Shadiviah"> contact us</a> page or visit <a href="Mediator-Shadiviah">Mediator info</a> page where you can contact Mediators. 
    </span>
    <form action="source-php/checkforloginmediator.php" method="POST" name="form" onsubmit="return formvalidation();">
      <input type="email" name="email" autocomplete="off" class="input_passcode" placeholder="Email"><br>

        <input type="password" name="passcode" class="input_passcode" placeholder="Passcode"><br>
        
        <input type="submit" id="submit" value="Login" class="btn btn-primary login_btn">
    </form> 
    <span class="warn_span below_span">
        A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.
    </span>
    </center>

</div>
<script>

  function formvalidation(){
    document.getElementById('submit').disabled=true;
    var email = document.forms['form']['email'].value;
    var passcode = document.forms['form']['passcode'].value;

    if(email == ""){
      alert("PLEASE ENTER EMAIL ADDRESS");
      document.getElementById('submit').disabled=false;
      return false;
    }
    if(passcode == ""){
      alert("PLEASE ENTER PASSCODE");
      document.getElementById('submit').disabled=false;
      return false;
    }else{
      document.getElementById('submit').disabled=false;
      return true;
    }
    document.getElementById('submit').disabled=false;
    return true;

  }
</script>












<footer class="container-fluid term_footer_1">
   <a href="Home-Shadiviah" style="text-decoration:none;"><button class="btn btn-link footer-btn1">Home</button></a>
  <a href="Terms-and-condition-Shadiviah" style="text-decoration:none;"><button class="btn btn-link footer-btn1">Policies</button></a>
  <a href="Contact-Shadiviah" style="text-decoration:none;"><button class="btn btn-link footer-btn1">Contact</button></a>
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