<?php
error_reporting(0);

session_start();
if(isset($_COOKIE['shadiviah_family'])){
  header('location:User/Pannel');
  exit;
}
if(isset($_SESSION['wedcode']) && isset($_SESSION['mobile'])){
      header('location:info');
      exit;
  }
?>
<?php


$border_red_email = 0;
$border_red_psw = 0;
$email_value = "";
$psw_value = "";
if(isset($_SESSION['EmailNoError'])){
  $email_value = $_SESSION['EmailNoError'];
}
if(isset($_SESSION['EmailError'])){
  $border_red_email = 1;
  $email_value = $_SESSION['EmailError'];
}
if(isset($_SESSION['PswError'])){
  $psw_value = $_SESSION['PswError'];
  $border_red_psw = 1;
}


session_unset();
?>

<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <!-- <meta http-equiv="refresh" content="30"> -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
        <link rel="icon" href="site_image/love.png"/>
        <link rel="stylesheet" href="bootcss/animate.css"/>
        <link rel="stylesheet" href="bootcss/bootstrap.min.css"/>
        <link rel="stylesheet" href="bootcss/bootstrap.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="Text/Roboto.css">
        <link rel="stylesheet" href="User/css/login.css"/>
        <meta name="keywords" content="Signin,Shadiviah">
        <meta name="author" content="Sttar Vipin Rao">
        <meta name="description" content="Shadiviah: Make your Wedding memorable. Online Invitations in wedding, Register Wedding online, Get a beautiful Theme, Get an e-card, Share your wedding clips, Share Your wedding album and much more.">
        <style>
        <?php
          if($border_red_email==1){
            echo<<<style
            #username{
              border:2px solid red;
              box-shadow:1px 1px 4px red;
            }
style;
          }
          ?>
        <?php
          if($border_red_psw==1){
            echo<<<style2
            #password{
              border:2px solid red;
              box-shadow:1px 1px 4px red;
            }
style2;
          }
          ?>
        </style>
        <title>Signin Shadiviah</title>
        <script>
         
          //   var emailError = sessionStorage.getItem("EmailError");
          // if(emailError != 'undefined'){
          //    alert('reenter email');
          //    document.getElementById("username").style.boxShadow = "1px 1px 4px red";
          //    document.getElementById("username").style.border = "2px solid red";
          //   }

             


          function validform(){
            var username = document.forms['form']['username'].value;
            var password = document.forms['form']['password'].value;
             
            if(username.trim()==""){
              alert('Please enter phone number / email');
              document.getElementById("username").style.boxShadow = "1px 1px 4px red";
              document.getElementById("username").style.border = "2px solid red";
              return false;
            }
            if(password.trim()==""){
              alert('Please enter the password');
              document.getElementById("username").style.boxShadow = "1px 1px 4px green";
              document.getElementById("username").style.border = "2px solid green";
              document.getElementById("password").style.border="2px solid red";
              document.getElementById("password").style.boxShadow="1px 1px 4px red";
              return false;

            }
            return true;
          }
        </script>

  </head>
<body>

<!-- <header class="header">
    <div class="top">
        <span class="company-font">
            SHADIVIAH.IN
        </span>
    </div>

</header> -->

<div class="col-left float-left">
  <div class="icon" onclick="window.location.assign('Home-Shadiviah')"; style="cursor:pointer;"></div>
  <div class="login-font-div">Log In To Pannel</div>
  <div class="container-fluid form-div">
    <form action="source-php/userlogin.php" method="POST" name="form" onsubmit="return validform();">
     <label for="username" class="label_username">Email / Phone Number</label>
     <input type="text" name="username" id="username" value="<?php echo $email_value; ?>" class="input-username" autocomplete="off" placeholder="Email / Phone number">

     <label for="password" class="label_username margin-label">Password</label>
     <input type="password" name="password" id="password" class="input-username"  placeholder="Password">
      <div class="forget-link-div"><h6 class="forget-link">Forget?</h6></div>
     <input type="submit" class="btn btn-success btn-submit" value="Login">
     </form>
 </div>
 <div class="container-fluid line-div">
    <table style="margin: 0 auto;" ><tr>
        <td style="width:45%"><hr/></td>
        <td style="vertical-align:middle; text-align: center">OR</td>
        <td style="width:45%"><hr/></td>
        </tr></table>
 </div>
  <h4 class="h4-text">Share your memories with us on</h4>
   <div class="social-btn-div">
      <button class="btn btn-warning btn-insta">Instagram</button>
      <button class="btn btn-primary btn-facebook">Facebook</button>
   </div>
   
</div>

<div class="col-right float-right">
  <span class="company">SHADIVIAH.IN</span>
   <h1 class="right-div-headings">
     Login to your control pannel and start edit your page by yourself.
   </h1>
</div>



  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html> 
