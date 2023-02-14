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

$queryfire = "select * from mediators";
$getresult = mysqli_query($con,$queryfire);
$i=0;
while($result = mysqli_fetch_array($getresult)){
  $id[$i] = $result['id'];
  $name[$i] = $result['name'];
  $username[$i] = $result['username'];
  $shopname[$i] = $result['shopname'];
  $address[$i] = $result['address'];
  $mobileone[$i] = $result['mobileone'];
  $mobiletwo[$i] = $result['mobiletwo'];
  $email[$i] = $result['email'];
  $image[$i] = $result['image'];
  $passcode[$i] = $result['passcode'];
  $date[$i] = $result['dateofregister'];
  $action[$i] = $result['totalactionperform'];
  $dlt[$i] = $result['deletestatus'];
  $registerby[$i] = $result['registerby'];
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
    <title>Mediators db</title>
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
           Mediators List
    </h2>
  </center>
  <div class="container-fluid db_div">



    <table class="table table-bordered table-striped">
        <thead>
          <tr class="border">
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Shopname</th>
            <th scope="col">Address</th>
            <th scope="col">Mobile</th>
            <th scope="col">Mobile2</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Passcode</th>
            <th scope="col">Register Date</th>
            <th scope="col">Totalaction</th>
            <th scope="col">Delete Status</th>
            <th scope="col">Register By</th>

          </tr>
        </thead>
        <tbody>

<?php
for($j=0;$j<$i;$j++){
echo<<<rows
          <tr>
            <th scope="row">$id[$j]</th>
            <td>$name[$j]</td>
            <td>$username[$j]</td>
            <td>$shopname[$j]</td>
            <td>$address[$j]</td>
            <td>$mobileone[$j]</td>
            <td>$mobiletwo[$j]</td>
            <td>$email[$j]</td>
            <td>$image[$j]</td>
            <td>$passcode[$j]</td>
            <td>$date[$j]</td>
            <td>$action[$j]</td>
            <td>$dlt[$j]</td>
            <td>$registerby[$j]</td>
            
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