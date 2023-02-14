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
    <link rel="stylesheet" href="../mycss/adminregisterpower.css"/>

    <title>Register Mediator</title>
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
        Kindly fill the form correctly:
    </h5>
    
    <div class="container-fluid pannel_form_div">
      <h6 class="register_h6">
         Register Mediator:
      </h6>
      <div class="inner-form-div">
            <form action="../source-php/registermediatorpower.php" name="form" enctype="multipart/form-data" method="POST" onsubmit="return formvalidation();" >
               <label class="attributes_input_label" for="nm">
                 Name :
               </label>
               <input type="text" name="adminname" id="nm" class="adminname_input" placeholder="Name">
               
               <label class="attributes_input_label" for="nm2">
                 Shop Name:
              </label>
              <input type="text" name="shopname" id="nm2" class="adminname_input" placeholder="Shop Name">
              
              <label class="attributes_input_label" for="nm3">
                Address :
              </label>
              <input type="text" name="shopaddress" id="nm3" class="adminname_input" placeholder="Address">
              
              <label class="attributes_input_label" for="nm4">
                Mobile number  :
              </label>
              <input type="number" name="mobilenumber" id="nm4" class="adminname_input" placeholder="Mobile number 1">
              
              
              <label class="attributes_input_label" for="nm5">
                Mobile number (2nd) :
              </label>
              <input type="number" name="mobiletwo" id="nm5" class="adminname_input" placeholder="Mobile number 2">
              
              
              <label class="attributes_input_label" for="email">
                Email address :
              </label>
              <input type="email" name="email" id="email" class="adminname_input" placeholder="Email Address">
              
              
              
              <label class="attributes_input_label" for="img_id">
                Mediator Image :
              </label>
              <input type="file"  name="image" id="img_id" class="adminname_input image_input" >
              


              <label class="attributes_input_label" for="nm6">
                Create a unique passcode:
              </label>
              <input type="Password" name="passcode" id="nm6" class="adminname_input" placeholder="Passcode">
              
              <label class="attributes_input_label" for="nm7">
                Confirm passcode:
              </label>
              <input type="password" name="passcodeconfirm" id="nm7" class="adminname_input" placeholder="Confirm Passcode">
              
              
              <input type="submit"  id="submit" class="btn btn-success submit_admin_login">
            </form>
            <a style="text-decoration:none;" href="pannel.php"><button class="btn btn-danger btn_more"> More Operations</button></a>
      </div>
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


   <script>
    function formvalidation(){
      document.getElementById('submit').disabled=true;
      var name = document.forms["form"]["adminname"].value;
      var shopname = document.forms["form"]["shopname"].value;
      var shopaddress = document.forms["form"]["shopaddress"].value;
      var mobileone = document.forms["form"]["mobilenumber"].value;
      var mobiletwo = document.forms["form"]["mobiletwo"].value;
      var email = document.forms["form"]["email"].value;
      var image = document.forms["form"]["image"].value;
      var passcode = document.forms["form"]["passcode"].value;
      var confirmpasscode = document.forms["form"]["passcodeconfirm"].value;
      var same = passcode.localeCompare(confirmpasscode);
      
      if(name == ""){
        alert("PLEASE ENTER NAME");
        document.getElementById('submit').disabled=false;
        return false;
      }
      if(image==""){
        alert("PLEASE ENTER IMAGE");
        document.getElementById('submit').disabled=false;
        return false;
      }
      if(shopaddress==""){
        alert("PLEASE ENTER SHOP ADDRESS");
        document.getElementById('submit').disabled=false;
        return false;
      }
      if(email==""){
        alert("PLEASE ENTER EMAIL");
        document.getElementById('submit').disabled=false;
        return false;
      }
      if(shopname==""){
        alert("PLEASE ENTER SHOPNAME");
        document.getElementById('submit').disabled=false;
        return false;
      }
      if(passcode==""){
        alert("PLEASE ENTER PASSCODE");
        document.getElementById('submit').disabled=false;
        return false;
      }
      if(mobileone==""){
        alert("PLEASE ENTER MOBILE NUMBER");
        document.getElementById('submit').disabled=false;
        return false;
      }
      if(mobiletwo==""){
        alert("PLEASE ENTER 2ND MOBILE NUMBER");
        document.getElementById('submit').disabled=false;
        return false;
      }
      if(confirmpasscode==""){
        alert("PLEASE CONFIRM PASSCODE");
        document.getElementById('submit').disabled=false;
        return false;
      }
      
      else{
        
        return true;
      }
      return true;
    }
  </script>
  

   </body>
   </html>