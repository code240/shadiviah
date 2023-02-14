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
    <title>Change-DP</title>
    
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
        Make your account more updated. Change Display photo!!!
    </h1>    
</center>

<div class="container-fluid form_div">
<center>
   <form action="../source-php/portal-files/changemediatordp.php" method="POST" name="form" enctype="multipart/form-data" onsubmit="return formvalidation();">
       <input type="file" name="file" accept="image/*" id="file" class="file_style">
       <input type="submit" id="submit" class="btn btn-primary submit" value="Change">
   </form>
   <button onclick="window.location.assign('Mediator-Access');" class="btn btn-danger submit">Back</button>
</center>
</div>


<script>
  function formvalidation(){
    document.getElementById('submit').disabled=true;
      var newtwo = document.forms['form']['file'].value;
    
    if(newtwo==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE SELECT A FILE");
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