<?php
error_reporting(0);

if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    header('location:../Home-Shadiviah');
    exit;
}
?>

<?php
 include 'php/viewwedding.php';

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
    <!-- <link rel="stylesheet" href="../mycss/index_css.css"> -->

    <!-- <link rel="stylesheet" href="../mycss/terms_css.css"/> -->
    <!-- <link rel="stylesheet" href="../mycss/help_css.css"/> -->
    <!-- <link rel="stylesheet" href="../mycss/portal_css.css"/> -->

    <link rel="stylesheet" href="portalcss/changepasscode.css"/>
    <link rel="stylesheet" href="portalcss/viewwedding.css"/>
    <title>View Registered Wedding</title>
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
        Wedding Registered by You!!
    </h1>    
</center>
<?php

if($nodata == 0){
 echo '<div class="container-fluid row main-div-for-weddings">';

for($j=$i-1;$j>=0;$j--){
echo<<<data

     <div class="col-lg-3 col-md-4 col-sm-5 wedding-columns">
        <span class="boyname_span">
            $boyname[$j]
        </span>
        <span class="weds_span">
            Weds
        </span>
        <span class="girlname_span">
            $girlname[$j]
        </span>
        <span class="date_span">
            $date[$j]
        </span>
         <center>
        <table class="table-btn">
           
            <tr>
                <td>
                   <a style="text-decoration: none;" href="$url[$j]" target="_blank">
                      <button class="btn btn-success  view_btn">
                         View Page
                      </button>
                   </a>
                </td>
                <td>   
                   <a style="text-decoration: none;" href="rsvpimage.php?wedding=$weddingcode[$j]">
                       <button class="btn btn-info  view_btn">
                         Fam. img
                       </button>
                   </a>
                </td>
            </tr>
                <tr>
                <td>
                   <a style="text-decoration: none;" href="featureimage.php?wedding=$weddingcode[$j]">
                       <button class="btn btn-warning  view_btn">
                            Feature img
                       </button>
                   </a>
                </td>
                <td>
                    <a style="text-decoration: none;" href="qr.php?wedding=$weddingcode[$j]">
                        <button class="btn btn-danger  view_btn">
                             QR Code
                        </button>
                    </a>
                </td>
                </tr>
              
            </table>
        </center>
     </div>
data;

}
echo '</div>';

}

?>
<?php
if($nodata==1){
echo<<<nodatadiv

<div class="container-fluid nodata">
  <center> 
   <h3 class="nodata-h3">
       OOPS!!!<br>
       SORRY,<br>
       There is no wedding register by you!!
   </h3>
  </center>
</div>
nodatadiv;

}
?>


















<!-- ############################################################################ -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>