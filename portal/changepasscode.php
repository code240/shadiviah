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
    <link rel="stylesheet" href="portalcss/changepasscode.css">
    <title>Change-Passcode</title>
  </head>
  <body >
<!-- ############################################################################ -->

<header class="container-fluid">
   <a href="../Home-Shadiviah" style="text-decoration: none;">
    Shadiviah.in
   </a> 
</header>
<center>
    <h1>
        Make your account more secure. Change passcode!!!
    </h1>    
</center>

<div class="container-fluid form_div">
<center>
   <form action="../source-php/portal-files/changemediatorpassword.php" method="POST" name="form" onsubmit="return formvalidation();">
       <input type="password" name="oldpasscode" id="old" class="input" placeholder="OLD PASSCODE">
       <input type="password" name="newpasscode" id="newone" class="input" placeholder="NEW PASSCODE" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
       <input type="password" name="newpasscodetwo" id="newtwo" class="input" placeholder="CONFIRM PASSCODE" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
       <input type="submit" id="submit" class="btn btn-primary submit mt-my" value="Change">
   </form>
   <button onclick="window.location.assign('Mediator-Access');" class="btn btn-danger submit">Back</button>
</center>
</div>


<script>
  function formvalidation(){
    document.getElementById('submit').disabled=true;
    var pss= document.forms['form']['oldpasscode'].value;
    var newone = document.forms['form']['newpasscode'].value;
    var newtwo = document.forms['form']['newpasscodetwo'].value;
    if(pss==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER OLD PASSCODE");
        return false;
    }
    if(newone==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER NEW PASSCODE");
        return false;
    }
    if(newtwo==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE CONFIRM NEW PASSCODE");
        return false;
    }else{
        return true;
    }
    return true;
  }

</script>











<!-- ############################################################################ -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>