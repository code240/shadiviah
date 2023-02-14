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
  
    <title>Query fire</title>
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
     Lets Fire A Query!!!
  </h3>
</center>
<div class="container-fluid querydiv">
  <center>
   <form action="">
     <textarea class="query_input" placeholder="Enter Query"></textarea>
     <span class="warning_span">
       You cannot fire insert , deletion and any other query. This is only given to get data from the data base
     </span>
     <input type="radio" id="db1" value="1" name="radiobtn">
     <label for="db1" class="label_inputs">Main db</label><br>
     
     <input type="radio" id="db2" value="2" name="radiobtn">
     <label for="db2" class="label_inputs">Mediater db</label><br>
     
     <input type="radio" id="db3" value="3" name="radiobtn">
     <label class="label_inputs" for="db3">Getintouch db</label><br>
     

    <input type="password" name="passcode" id="passcode" placeholder="Supreme password" class="supreme_input">
    <span class="warning_span danger_span">
      You cannot fire insert , deletion and any other query. This is only given to get data from the data base
    </span> 
    <input type="submit" class="btn btn-danger Fire_btn" value="Fire">
   </form>
   </center>
</div>



<div class="container-fluid attributes_shower">
  <div id="accordion">
    <div class="card">
      <div class="card-header collapse_color_1" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h5 class="mb-0">
          <button class="btn btn-link font-design-btn" >
            Attributes in Main db?
          </button>
        </h5>
      </div>
  
      <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body answers">
          Anim pariatur cliche reprehenderit,
        </div>
      </div>
    </div>

    <!-- ############# -->

    <div class="card">
      <div class="card-header collapse_color_1" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed font-design-btn " data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Attributes in Mediator db?
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body answers">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon .
        </div>
      </div>
    </div>

    <!-- ############### -->

    <div class="card">
      <div class="card-header collapse_color_1" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed font-design-btn " data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Attributes in getintouch db?
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body answers">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,le VHS.
        </div>
      </div>
    </div>

      <!-- ############### -->


  </div>

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