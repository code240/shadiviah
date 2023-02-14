<?php
error_reporting(0);

if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    header('location:../Home-Shadiviah');
    exit;
}
?>
<?php
include 'php/ready.php';

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
    <link rel="stylesheet" href="../mycss/index_css.css">
    <link rel="stylesheet" href="../mycss/terms_css.css"/>
    <!-- <link rel="stylesheet" href="portalcss/changepasscode.css"> -->
    <!-- <link rel="stylesheet" href="portalcss/formone.css"> -->
    <!-- <link rel="stylesheet" href="portalcss/formtwo.css"> -->
  <link rel="stylesheet" href="portalcss/readyall.css">
    <title>Successfully Register</title>
  </head>
  <body >
<!-- ############################################################################ -->

<header class="container-fluid">
   <a href="" style="text-decoration: none;">
    Shadiviah.in
   </a> 
</header>



<span id="copied"  class="alert copied">
   COPIED!!!!
</span>



<h1 class="h1_tag">
   Wedding Register Successfully!!!
</h1>







<div class="container-fluid wedding-code-div">
   <center>

      <div class="container-fluid qr-code-show" id="qrcode"></div>


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


      <span class="bulb-text">
          Thats the QR code for that page, Kindly Save the image and use this QR code in the wedding card. 
          <br>
          <b>Note:</b> Kindly check the QR code for once before use it in wedding card. 
      </span>

   </center>
 </div>
 <div class="container-fluid wedding-code-div">
    <center>
       <h3 class="link-h3" id="url">
       <?php echo $url; ?>
       </h3>
       <button class="copyButton btn btn-primary copy-btn" id="copyButton3" onclick="copy('#url');">
           COPY
       </button> 
       <span class="bulb-text">
           This is the url for the wedding page and it will start with in 2-3 working days.
       </span>
    </center>
  </div>
<div class="container-fluid wedding-code-div">
  <center>
     <h3 id="weddingcode">
     <?php echo $weddingcode; ?>
     </h3>
     <button class="copyButton btn btn-primary copy-btn" id="copyButton2" onclick="copy('#weddingcode');">
         COPY
     </button> 
     <span class="bulb-text">
         Wedding code and phone number will help you to search wedding in our website.
     </span>
  </center>
</div>
<div class="container-fluid wedding-code-div">
    <center>
       <h3 id="text1">
          <?php echo $mobile; ?>
       </h3>
       <button class="copyButton btn btn-primary copy-btn" id="copyButton1" onclick="copy('#text1');">
           COPY
       </button> 
       <span class="bulb-text">
           Wedding code and phone number will help you to search wedding in our website.
       </span>
    </center>
  </div>
<center>
<a style="text-decoration:none;" href="Mediator-Access">
   <button class="btn btn-warning  btnhome">
       Back to Pannel
   </button>
</a>
</center>
<footer class="container-fluid term_footer_1">
   <button onclick="window.location.assign('../Home-Shadiviah');" class="btn btn-link footer-btn1">Home</button>
  <button onclick="window.location.assign('../Help-Shadiviah');" class="btn btn-link footer-btn1">Help</button>
 <button onclick="window.location.assign('../Contact-Shadiviah');" class="btn btn-link footer-btn1">Contact</button>
</footer>

<footer class="container-fluid footer_2">
  <center>
    <label class="copyright_text">
      <span class="cpyryt_symbol">&#169; </span>Copyrights,
       Shadiviah.in-2021, All rights reserved.
      </label>
  </center>
</footer>



  
  
  
  












<!-- ############################################################################ -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  


    <script>
      function copy(copyId){
        var $inp=$("<input>");
        $("body").append($inp);
        $inp.val($(""+copyId).text()).select();
        document.execCommand("copy");
        $inp.remove();
   
        $(".alert").fadeIn(500,
        function(){
          $(".alert").fadeOut(600);
        });
        //alert('copied');
        
   
   
        $(document).ready(function(){
           $("#copyButton1").click(
             function(){
               copy('#text1');
             });
   
        });
   
        $(document).ready(function(){
         $("#copyButton2").click(
           function(){
             copy('#weddingcode');
           });
   
      });
       
      
      $(document).ready(function(){
         $("#copyButton3").click(
           function(){
             copy('#url');
           });
   
      });
   
      }
      
    </script>
      

   </body>
</html>