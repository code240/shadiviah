<?php
include 'vip_encode_decode.php';
if(isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    
    $mediator_name = decode($_COOKIE['SHADIVIAH_MEDIATOR']);
    $con=mysqli_connect('localhost','root','','shadiviah');
    if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
    }
    $nodata = 0;
    $queryfire = "SELECT * FROM wedding where registerby = '$mediator_name' and deletestatus = 0";
    $getresult = mysqli_query($con,$queryfire);
    $rowcount = mysqli_num_rows($getresult);
    if($rowcount == 0){
        $nodata = 1;
    }
    $i = 0;
    if($rowcount != 0){
        
        while($result = mysqli_fetch_array($getresult)){
            $boyname[$i] = ucfirst($result['boy']);
            $girlname[$i] = ucfirst($result['girl']);
            $date[$i]     = decode_date_ymd($result['barat_date']);
            $mobile[$i]   = $result['mobile'];
            $weddingcode[$i] = $result['wedding_code'];
            $pagename[$i] = $result['pagename'];
            $url[$i] = "http://shadiviah.in/Wedding/".$pagename[$i].".php";
            $i++;
        }
    }
    






}
if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    header('location:../Home-Shadiviah'); 
}

?>