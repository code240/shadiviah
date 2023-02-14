<?php

  include 'php/vip_encode_decode.php';
if(isset($_COOKIE['shadiviah_family'])){
    
    $wed_code = decode($_COOKIE['shadiviah_family']);
    $con=mysqli_connect('localhost','root','','shadiviah');
    if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
    }
    $nodata = 0;
    $queryfire = "SELECT pagename FROM wedding where wedding_code = '$wed_code'";
    $getresult = mysqli_query($con,$queryfire);
    $rowcount = mysqli_num_rows($getresult);
    if($rowcount == 0){
        $nodata = 1;
        echo "<script>window.history.back();</script>";
        exit;
    }
    $i = 0;
    if($rowcount != 0){
        
        while($result = mysqli_fetch_array($getresult)){
          $pagename = $result['pagename'];
          
        }
        $url = "http://www.shadiviah.in/Wedding/".$pagename.".php/";
        
    }
    






}
if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    header('location:../../Home-Shadiviah'); 
}

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
    <title>QR-Code</title>
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
        QR CODE
    </h1>    
</center>


<div class="container-fluid qrcode" id="qrcode">

</div>
<script type="text/javascript">
    var qrdata = "<?php echo $url; ?>";
  //new QRCode(document.getElementById("qrcode"),qrdata );
    var qrcode = new QRCode(document.getElementById("qrcode"), {
       text: qrdata,
       width: 200,
       height: 200,
       colorDark : "#000000",
       colorLight : "#ffffff",
       correctLevel : QRCode.CorrectLevel.H
   });
 </script>






<center>
<h2 class="h2-tag">
   Kindly Check QR Code before use. <br><br>
</h2>
<h2 class="url-tag" ><?php echo $url; ?><br><br>And your Wedding Code is: <?php echo $wed_code; ?></h2>

<button class="btn btn-warning back_btn" onclick="window.history.back();">Back</button>
</center>

<div class="container-fluid" style="height:30rem;"></div>










<!-- ############################################################################ -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>