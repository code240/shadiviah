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

    <title>Pannel Home</title>
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
<h1>
    Welcome as administrator:
</h1>

<div class="container-fluid maindiv_for_help">
    
    <h5 class="admin_heading pannel_heading">
        Administrator:
    </h5>
    
    <div class="container-fluid middle_div">
        <h5 class="admin_heading pannel_heading_action_list">
            List of action you can perform:
        </h5>  
        <center>
        <a style="text-decoration: none;" href="mediatorregisterpower.php"   >
        <button class="btn btn-primary action_btns">
           Register mediator
        </button>
        </a>
        <a style="text-decoration:none;" href="databaselistpower.php" >
        <button class="btn btn-success action_btns">
            View Database 
         </button>
         </a>
         <a style="text-decoration:none;" href="queryfirepower.php">
         <button class="btn btn-danger action_btns">
            Query fire
         </button>
         </a>
         <a style="text-decoration:none;" href="dataanalyspower.php">
         <button class="btn btn-secondary action_btns">
            Data Analys
         </button>
         </a>
         <a style="text-decoration:none;" href="decode.php">
         <button class="btn btn-danger action_btns">
            Decode
         </button>
         </a>
         <!-- copy start -->
         <a style="text-decoration:none;" href="encode.php">
         <button class="btn btn-primary action_btns">
            Encode
         </button>
         </a>
         <a style="text-decoration:none;" href="psdecode.php">
         <button class="btn btn-danger action_btns">
            Ps Decode
         </button>
         </a>
         <a style="text-decoration:none;" href="psencode.php">
         <button class="btn btn-primary action_btns">
            Ps Encode
         </button>
         </a>
         <!-- copy over -->
         <a style="text-decoration:none;" href="">
         <button class="btn btn-warning text-truncate action_btns" onclick="window.open('registeradministratorpower.php','name','width=1600,height=1400')">
            Register administrator
         </button>
         </a>
        </center>
    </div>


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