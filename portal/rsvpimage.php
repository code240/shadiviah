<?php
error_reporting(0);

if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    header('location:../Home-Shadiviah');
    exit;
}
?>
<?php

$wed_code = $_GET['wedding'];
session_start();
$_SESSION['wedcode'] = $wed_code;

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../site_image/love.png"/>
    <script src="js/qrcode.min.js"></script>
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootcss/animate.css">
    <link rel="stylesheet" href="../bootcss/bootstrap.min.css"/>
    <link rel="stylesheet" href="../bootcss/bootstrap.css"/>
   
    <link rel="stylesheet" href="portalcss/changepasscode.css"/>
    <link rel="stylesheet" href="portalcss/viewwedding.css"/>
    <link rel="stylesheet" href="portalcss/generalcss.css"/>
    <title>Family Images</title>
  </head>
  <body >
<!-- ############################################################################ -->

<header class="container-fluid">
   <a href="" style="text-decoration: none;">
    Shadiviah.in
   </a> 
</header>
<center>
    <h1>
        Upload Family elders image only --(4)
    </h1>    
</center>

<div class="container-fluid for_form_div">
<center>
    <form action="php/uploadrsvp.php" enctype="multipart/form-data" onsubmit="return formvalidation();" name="form" method="POST">
        <input type="file"  accept="image/*"  name="i1" class="file_input">
        <input type="text" name="c1" class="file_input" autocomplete="off" placeholder="Image caption">
        <input type="submit" id="submit" class="btn btn-primary submit_btn">
    </form>
</center>
</div>







<center>
<button class="btn btn-warning back_btn" onclick="window.history.back();">Back</button>
</center>








<script>
function formvalidation(){
    document.getElementById('submit').disabled=true;
    var i1 = document.forms['form']['i1'].value;
    var c1 = document.forms['form']['c1'].value;
    
    if(i1==""){
          document.getElementById('submit').disabled=false;
          alert("PLEASE SELECT THE IMAGE");
          return false;
      }

    if(c1==""){
          document.getElementById('submit').disabled=false;
          alert("PLEASE ENTER THE CAPTION FOR IMAGE");
          return false;
        }
      else{
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