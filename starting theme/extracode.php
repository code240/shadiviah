<?php
$getdata=mysqli_query($con,$queryfire);
$rowcount = mysqli_num_rows($getdata);
mysqli_free_result($getdata);
if($rowcount<=25){
    $date=date("d");
    $date = (int)$date;
    $queryfire = "select targetcolumn from target";
    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
       $targetcolumn = $result['targetcolumn'];
    }
    $targetcolumn = (int)$targetcolumn;
    
    
    
}
?>
<?php

function newinsight(){
// first check for cookie
if(!isset($_COOKIE['shadiviah_user'])) {
 
date_default_timezone_set('Asia/Kolkata');
$date=date("d");
$date = (int)$date;
$con=mysqli_connect('localhost','root','','shadiviah');

if(mysqli_connect_errno()){
$con=mysqli_connect('localhost','root','','shadiviah');
}   
$queryfire = "select targetcolumn from target";
$getdata = mysqli_query($con , $queryfire);
while($result=mysqli_fetch_array($getdata)){
   $targetcolumn = $result['targetcolumn'];
}
$targetcolumn = (int)$targetcolumn;
$minustarget = $targetcolumn - 1;
if($targetcolumn == 1){
   $minustarget = 21;
}
$queryfire = "select date from insight Where control=$minustarget";
$getdata = mysqli_query($con , $queryfire);
while($result=mysqli_fetch_array($getdata)){
    $dbdate = $result['date'];
 }
$dbdate = (int)$dbdate;
if($date == $dbdate){
    $queryfire = "select newvisit from insight where control = $minustarget and date = $date";

    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
        $newvisit = $result['newvisit'];
    }
    $newvisit = (int)$newvisit;
    $newvisit = $newvisit + 1;
    $queryfire = "update insight set newvisit = $newvisit Where control = $minustarget and date = $date";
    mysqli_query($con,$queryfire);
    $queryfire = "select totalnewvisitor from target";
    $getdata = mysqli_query($con,$queryfire);
    while($result = mysqli_fetch_array($getdata)){
        $totalnewvisitor = $result['totalnewvisitor'];
    }
    $totalnewvisitor = (int)$totalnewvisitor;
    $totalnewvisitor = $totalnewvisitor + 1;
    $queryfire = "update target set totalnewvisitor = $totalnewvisitor";
    mysqli_query($con,$queryfire);
    
}
$cookie_name = "shadiviah_user";
    $cookie_value = "IPqj3rjgssJG3r3l9iqjqp3rjg3rtu";
    setcookie($cookie_name, $cookie_value, time() + (3600*24*21), "/");

if($dbdate != $date){
$queryfire = "
    UPDATE insight
    SET indexvisit = 0,
    newvisit = 1,
    contactvisit = 0,
    aboutvisit = 0,
    helpvisit = 0,
    mediatorvisit = 0,
    themeonevisit = 0,
    themetwovisit = 0,
    themethreevisit = 0,
    themefourvisit = 0,
    themefivevisit = 0,
    date = $date
    WHERE control = $targetcolumn";

mysqli_query($con , $queryfire);
$plustarget = $targetcolumn + 1;
if($targetcolumn == 21){
    $plustarget = 1 ;
}
$queryfire = "update target set targetcolumn = $plustarget";
mysqli_query($con , $queryfire);
}
} // end if for cookies

if(isset($_COOKIE['shadiviah_user'])){
    $cookie_name = "shadiviah_user";
    $cookie_value = "IPqj3rjgssJG3r3l9iqjqp3rjg3rtu";
    setcookie($cookie_name, $cookie_value, time() - (100), "/");
    setcookie($cookie_name, $cookie_value, time() + (3600*24*21), "/");
}
} //Function theme five insight end
?>




<div class="col-xl-3 col-lg-3  main_mediator_div">

<div class="container-fluid dp_and_name_div">
  <div class="container-fluid row row_for_name_dp">             
       <div class="col-3 for_dp_mediator">
         <img src="site_image/wedding_info_four.jpg" alt="shadiviah-mediator">
       </div>
     
       <div class="col-9 container-fluid text-truncate for_name_mediator">
          <span class="mediator_name_span ">
              Mukesh Sharma mediator
          </span> 
       </div>
</div>
</div>   
<div class="container-fluid mediator_extra_data_div">
 <span class="bold_attriute_of_mediator_span">
    Shopname:
 </span>
 <span class="answer_of_mediator_span">
   Mukesh card makers card makers card makers
 </span><br><br>
 <span class="bold_attriute_of_mediator_span">
   Address:
</span>
<span class="answer_of_mediator_span">
   near BMG mall, Rewari,(haryana)
</span><br><br>
</div>
 <div class="container-fluid call_btn_div">
   <a style="text-decoration: none;" href="tel:8930395227">
     <button class="btn btn-block btn-success call_btn">Call</button>
   </a>
 </div>
 <!--Text copied-->

</div><!--End of 2nd mediator main div-->
<div class="col-xl-3 col-lg-3  main_mediator_div">

<div class="container-fluid dp_and_name_div">
  <div class="container-fluid row row_for_name_dp">             
       <div class="col-3 for_dp_mediator">
         <img src="site_image/wedding_info_four.jpg" alt="shadiviah-mediator">
       </div>
     
       <div class="col-9 container-fluid text-truncate for_name_mediator">
          <span class="mediator_name_span ">
              Mukesh Sharma mediator
          </span> 
       </div>
</div>
</div>   
<div class="container-fluid mediator_extra_data_div">
 <span class="bold_attriute_of_mediator_span">
    Shopname:
 </span>
 <span class="answer_of_mediator_span">
   Mukesh card makers card makers card makers
 </span><br><br>
 <span class="bold_attriute_of_mediator_span">
   Address:
</span>
<span class="answer_of_mediator_span">
   near BMG mall, Rewari,(haryana)
</span><br><br>
</div>
 <div class="container-fluid call_btn_div">
   <a style="text-decoration: none;" href="tel:8930395227">
     <button class="btn btn-block btn-success call_btn">Call</button>
   </a>
 </div>
 <!--Text copied-->

</div><!--End of 3rd mediator main div-->
<div class="col-xl-3 col-lg-3  main_mediator_div">

<div class="container-fluid dp_and_name_div">
  <div class="container-fluid row row_for_name_dp">             
       <div class="col-3 for_dp_mediator">
         <img src="site_image/wedding_info_four.jpg" alt="shadiviah-mediator">
       </div>
     
       <div class="col-9 container-fluid text-truncate for_name_mediator">
          <span class="mediator_name_span ">
              Mukesh Sharma mediator
          </span> 
       </div>
</div>
</div>   
<div class="container-fluid mediator_extra_data_div">
 <span class="bold_attriute_of_mediator_span">
    Shopname:
 </span>
 <span class="answer_of_mediator_span">
   Mukesh card makers card makers card makers
 </span><br><br>
 <span class="bold_attriute_of_mediator_span">
   Address:
</span>
<span class="answer_of_mediator_span">
   near BMG mall, Rewari,(haryana)
</span><br><br>
</div>
 <div class="container-fluid call_btn_div">
   <a style="text-decoration: none;" href="tel:8930395227">
     <button class="btn btn-block btn-success call_btn">Call</button>
   </a>
 </div>
 <!--Text copied-->

</div><!--End of 4th mediator main div-->
<div class="col-xl-3 col-lg-3  main_mediator_div">

<div class="container-fluid dp_and_name_div">
  <div class="container-fluid row row_for_name_dp">             
       <div class="col-3 for_dp_mediator">
         <img src="site_image/wedding_info_four.jpg" alt="shadiviah-mediator">
       </div>
     
       <div class="col-9 container-fluid text-truncate for_name_mediator">
          <span class="mediator_name_span ">
              Mukesh Sharma mediator
          </span> 
       </div>
</div>
</div>   
<div class="container-fluid mediator_extra_data_div">
 <span class="bold_attriute_of_mediator_span">
    Shopname:
 </span>
 <span class="answer_of_mediator_span">
   Mukesh card makers card makers card makers
 </span><br><br>
 <span class="bold_attriute_of_mediator_span">
   Address:
</span>
<span class="answer_of_mediator_span">
   near BMG mall, Rewari,(haryana)
</span><br><br>
</div>
 <div class="container-fluid call_btn_div">
   <a style="text-decoration: none;" href="tel:8930395227">
     <button class="btn btn-block btn-success call_btn">Call</button>
   </a>
 </div>
 <!--Text copied-->

</div><!--End of 5th mediator main div-->
