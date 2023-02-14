<?php
if(!isset($_COOKIE['Shadiviah_Login'])){
    header('location:../Home-Shadiviah');
    exit;
}
?>
<?php
$con=mysqli_connect('localhost','root','','shadiviah');

if(mysqli_connect_errno()){
$con=mysqli_connect('localhost','root','','shadiviah');
} 

$queryfire = "select * from wedding";
$getresult = mysqli_query($con,$queryfire);
$i=0;
while($result = mysqli_fetch_array($getresult)){
  $id[$i] = $result['id'];
  $weddingof[$i] = $result['weddingof'];
  $girlname[$i] = $result['girl'];
  $boyname[$i] = $result['boy'];
  $boy_father[$i] = $result['boy_father'];
  $boy_mother[$i] = $result['boy_mother'];
  $girl_mother[$i] = $result['girl_mother'];
  $girl_father[$i] = $result['girl_father'];
  $boy_address[$i] = $result['boy_address'];
  $girl_address[$i] = $result['girl_address'];
  $lagandate[$i] = $result['lagan_date'];
  $baratdate[$i] = $result['barat_date'];
  $weddingvenue[$i] = $result['wedding_venue'];
  $program_address[$i] = $result['program_address'];
  $mobile[$i] = $result['mobile'];
  $theme[$i] = $result['theme'];
  $weddingcode[$i] = $result['wedding_code'];
  $registerby[$i] = $result['registerby'];
  $public[$i] = $result['public'];
  $insight[$i] = $result['insight'];
  $invitation_insight[$i] = $result['invitation_insight'];
  $deletestatus[$i] = $result['deletestatus'];
  $register_date[$i] = $result['register_date'];
  $register_time[$i] = $result['register_time'];
  $pagename[$i] = $result['pagename'];
  // new config code
  $w = $weddingcode[$i];
  $newquery = "SELECT * FROM config WHERE wedding_code = '$w' AND deletestatus=0";
  $getdata = mysqli_query($con,$newquery);
  $getrowcount = mysqli_num_rows($getdata);
  if($getrowcount==0){
     $btn[$i] = '<a href="config.php?wed='.$weddingcode[$i].'"><button class="btn btn-warning">Config</button></a>';
  }
  if($getrowcount==1){
  
    $btn[$i] = '<button class="btn btn-success" onclick="alert(\'Alerady Config Successfully!!\');">Done</button>';
  }
  if($getrowcount>1){
    $btn[$i] = '<button class="btn btn-danger" onclick="alert(\'Data Repeatation Error!! Please Check As Soon As Possible\');">Error</button>';

  }
  $i++;
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
    <link rel="stylesheet" href="../../bootcss/animate.css">
    <link rel="stylesheet" href="../../bootcss/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../bootcss/bootstrap.css"/>
    <link rel="stylesheet" href="../../mycss/index_css.css"/>
    <link rel="stylesheet" href="../../mycss/help_css.css"/>
    <link rel="stylesheet" href="../../mycss/portal_css.css"/>
    <link rel="stylesheet" href="../../mycss/loginpannel.css"/>
    <link rel="stylesheet" href="../../mycss/pannel.css"/>
    <link rel="stylesheet" href="css/all_css.css"/>
    <title>Wedding db</title>
    <!-- <meta http-equiv="refresh" content="30"> -->
  </head>
  <body>
<!-- ############################################################################ -->

<div class="container-fluid top_term">
 <a href="../../Home-Shadiviah" style="text-decoration: none;">

 <span class="home_text_span">
     Home 
 </span> 
 </a>
 <a style="text-decoration: none;" href="../../Home-Shadiviah">
 <span class="site_text_span">
    Shadiviah.in
</span> 
</a>
</div>
<h1>
    Welcome as administrator:
</h1>


<div class="container-fluid main_for_db">
  <center>
    <h2 class="db_name_heading">
           Wedding database
    </h2>
  </center>
  <div class="container-fluid db_div">



    <table class="table table-bordered table-striped">
        <thead>
          <tr class="border">
            <th scope="col">id</th>
            <th scope="col">Wedding of</th>
            <th scope="col">Boy</th>
            <th scope="col">Girl</th>
            <th scope="col">Boy father</th>
            <th scope="col">Boy Mother</th>
            <th scope="col">Girl Father</th>
            <th scope="col">Girl Mother</th>
            <th scope="col">Boy Address</th>
            <th scope="col">Girl Address</th>
            <th scope="col">Lagan date (ymd)</th>
            <th scope="col">Barat date (ymd)</th>
            <th scope="col">Wedding Venue</th>
            <th scope="col">Program Address</th>
            <th scope="col">Mobile</th>
            <th scope="col">Theme</th>
            <th scope="col">Wedding Code</th>
            <th scope="col">Register By</th>
            <th scope="col">Public</th>
            <th scope="col">Insight</th>
            <th scope="col">Invitation Insight</th>
            <th scope="col">Delete</th>
            <th scope="col">Register Date</th>
            <th scope="col">Register Time</th>
            <th scope="col">Page url</th>
            <th scope="col">Config</th>


          </tr>
        </thead>
        <tbody>

<?php
for($j=$i-1; $j>=0; $j--){
echo<<<rows
          <tr>
            <th scope="row">$id[$j]</th>
            <td>$weddingof[$j]</td>
            <td>$boyname[$j]</td>
            <td>$girlname[$j]</td>
            <td>$boy_father[$j]</td>
            <td>$boy_mother[$j]</td>
            <td>$girl_father[$j]</td>
            <td>$girl_mother[$j]</td>
            <td>$boy_address[$j]</td>
            <td>$girl_address[$j]</td>
            <td>$lagandate[$j]</td>
            <td>$baratdate[$j]</td>
            <td>$weddingvenue[$j]</td>
            <td>$program_address[$j]</td>
            <td>$mobile[$j]</td>
            <td>$theme[$j]</td>

            <td>$weddingcode[$j]</td>
            <td>$registerby[$j]</td>
            <td>$public[$j]</td>
            <td>$insight[$j]</td>
            <td>$invitation_insight[$j]</td>
            <td>$deletestatus[$j]</td>
            <td>$register_date[$j]</td>
            <td>$register_time[$j]</td>
            <td>$pagename[$j]</td>
            <td>$btn[$j]</td>
            
          </tr>
rows;
}

?>
        </tbody>
      </table>




  </div>
</div>



































<footer class="container-fluid term_footer_1">
    <center>
     <span class="subheading3">
         shadiviah.in-2021
      </span>
      <a href="../../Home-Shadiviah">
      <span class="links">
       Home
      </span>
      </a>
      
      <a href="../../About-Shadiviah">
      <span class="links marginleft">
       About
      </span>
      </a>
      <a href="../logmeout.php">
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