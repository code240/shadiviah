<?php
if(!isset($_COOKIE['Shadiviah_Login'])){
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
    <link rel="stylesheet" href="../mycss/help_css.css"/>
    <link rel="stylesheet" href="../mycss/portal_css.css"/>
    <link rel="stylesheet" href="../mycss/loginpannel.css"/>
    <link rel="stylesheet" href="../mycss/pannel.css"/>
    <link rel="stylesheet" href="../mycss/dataanalyspower.css"/>
    <link rel="stylesheet" href="../mycss/queryfire.css"/>
    <link rel="stylesheet" href="../mycss/registeradministratorpower.css"/>
  
    <title>Register Admin/title>
    <!-- <meta http-equiv="refresh" content="30"> -->
  </head>
  <body>
<!-- ############################################################################ -->

<div class="container-fluid top_term">
 <a href="../index.php" style="text-decoration: none;">

 <span class="home_text_span">
     Home 
 </span> 
 </a>
 <a style="text-decoration: none;" href="../index.php">
 <span class="site_text_span">
    Shadiviah.in 
</span> 
</a>
</div>
<div class=" container-fluid div_4_background_image">
  <img class="img_analys" src="../site_image/data_analytics_banner.png" alt="shadiviah-data">
  <img class="img_analys_mobi" src="" alt="shadiviah-data">
</div>

<center>
  <h3 class="data_heading hd">
     Register an administrator on your risk
  </h3>
</center>
<div class="container-fluid querydiv">
  <center>
   <form action="../source-php/registeradminpower.php" name="form" method="POST" onsubmit="return formvalidation();">
    <input type="text" name="administratorname" class="input_box" placeholder="Administrator Name">
    <input type="password" name="administratorpasscode" class="input_box" placeholder="Administrator Passcode">

    <span class="warning_span">
      Make sure you create administrator to a right person. He or She can harm the system.
    </span>

    <input type="password" name="suppasscode" id="passcode" placeholder="Supreme password" class="supreme_input">
    
    <input type="submit" id="submit" class="btn btn-danger Fire_btn" value="Register">
   </form>
   </center>
</div>

<script>
  function formvalidation(){
    document.getElementById('submit').disabled=true;

    var name = document.forms["form"]["administratorname"].value;
    var passcode = document.forms["form"]["administratorpasscode"].value;
    var suppasscode = document.forms["form"]["suppasscode"].value;

    if(name == ""){
      alert("PLEASE ENTER NAME");
      document.getElementById('submit').disabled=false;
      return false;
    }
    if(passcode==""){
      alert("PLEASE ENTER PASSCODE");
      document.getElementById('submit').disabled=false;
      return false;
    }
    if(suppasscode==""){
      alert("PLEASE ENTER SUPREME PASSCODE");
      document.getElementById('submit').disabled=false;
      return false;
    }else{
      return true;
    }
    return true;
  }
</script>

<div class="container-fluid attributes_shower">
  
</div>


<div class="container-fluid back-btn-div">
  <a style="text-decoration: none;" href="pannel.php">
    <button class="btn btn-warning btn-block back_btn">More pannel tools</button>

  </a>
</div>















<footer class="container-fluid term_footer_1">
    <center>
     <span class="subheading3">
         shadiviah.in-2021
      </span>
      <a href="../index.php">
      <span class="links">
       Home
      </span>
      </a>
      
      <a href="../about.php">
      <span class="links marginleft">
       About
      </span>
      </a>
      <a href="logmeout.php">
      <span class="links marginleft">
        logout
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