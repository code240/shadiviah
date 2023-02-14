<?php
date_default_timezone_set('Asia/Kolkata');
$datayes = 0;
// $register_time=date("h:i");
$current_date=date("y-m-d");
$current_date = explode('-',$current_date);
$current_date[0] = "20".$current_date[0]; 

$con=mysqli_connect('localhost','root','','shadiviah');

if(mysqli_connect_errno()){
$con=mysqli_connect('localhost','root','','shadiviah');
} 

$queryfire = "select * from wedding where deletestatus = 0 and public = 1";
$getdata = mysqli_query($con,$queryfire);
$rowcount = mysqli_num_rows($getdata);
// echo $rowcount;
if($rowcount>0){
    $i=0;
    while($result = mysqli_fetch_array($getdata)){
        
        $date[$i] = date_decode($result['barat_date']);
        $encoded_date[$i] = $result['barat_date'];       
        $d = explode('-',$encoded_date[$i]);
        
        $d[0] = (int)$d[0];
        $current_date[0] = (int)$current_date[0];
        // echo $current_date[0]."<br>";
        // echo $d[0]."<br>";

        if($d[0]>$current_date[0]){
            $boyname[$i] = $result['boy'];
            $girlname[$i] = $result['girl'];
            $mobile[$i] = $result['mobile'];
            $weddingcode[$i] = $result['wedding_code'];
            $pagename[$i] = $result['pagename'];
            $url[$i] = "http://www.shadiviah.in/Wedding/".$pagename[$i].".php/";
            $datayes = 1; 
            $i++;
        }
        if($d[0]==$current_date[0]){
            $d[1] = (int)$d[1];
            $current_date[1] = (int)$current_date[1];
            // echo $d[1]; echo "<br>"; echo $current_date[1];

            if($d[1]>$current_date[1]){
                $boyname[$i] = $result['boy'];
                $girlname[$i] = $result['girl'];
                $mobile[$i] = $result['mobile'];
                $weddingcode[$i] = $result['wedding_code'];
                $pagename[$i] = $result['pagename'];
                $url[$i] = "http://www.shadiviah.in/Wedding/".$pagename[$i].".php/";
                $datayes = 1; 
                $i++;
            }
            if($d[1]==$current_date[1]){
                
                $d[2] = (int)$d[2];
                $current_date[2] = (int)$current_date[2];
                
                if($d[2]>=$current_date[2]){
                    $boyname[$i] = $result['boy'];
                    $girlname[$i] = $result['girl'];
                    $mobile[$i] = $result['mobile'];
                    $weddingcode[$i] = $result['wedding_code'];
                    $pagename[$i] = $result['pagename'];
                    $url[$i] = "http://www.shadiviah.in/Wedding/".$pagename[$i].".php/";
                    $datayes = 1; 
                    $i++;
                }        
            }
        }
       
      
    
    }
     if($datayes==1){
        // exit;
     
    $r = rand(0,$i-1);
    $wed_date = $date[$r];
    $url_print = $url[$r];
    $wedcodeX = $weddingcode[$r];
    $queryfire = "select * from wedding_images where weddingcode = '$wedcodeX' and feature = 2 and deletestatus=0";
    $getdata = mysqli_query($con,$queryfire);
    $rowcount = mysqli_num_rows($getdata);
    if($rowcount==0){
       $queryfireTwo = "select * from wedding_images where weddingcode = '$wedcodeX' and feature = 1 and deletestatus=0";
       $getdataTwo  = mysqli_query($con,$queryfireTwo);
       $rowcountTwo = mysqli_num_rows($getdataTwo);
       if($rowcountTwo == 0){
           $wedphoto = "couple-shadiviah_welto3rfiherog3qhfhew9ghfbev3q94woehffh3weji.jpg";

       }
       if($rowcountTwo > 0){
           $s=0;
           while($resultTwo = mysqli_fetch_array($getdataTwo)){
               $photos[$s] = $resultTwo['image'];
               $s++;
           }
           $random_s = rand(0,$s-1);
           $wedphoto = $photos[$random_s];
       }
           
    }
    if($rowcount>0){
        $r=0;
        while($result = mysqli_fetch_array($getdata)){
           $img[$r]  =  $result['image'];
           $r=$r+1;
        }
        $random_r = rand(0,$r-1);
        $wedphoto = $img[$random_r];
    } }
}


?>










































<?php

function date_decode($date){
  $date = explode("-",$date);
  $date[1] = (int)$date[1];
     
  if($date[1]==1){
      $m = "Jan";
  }
   
  if($date[1]==2){
      $m = "Feb";
  }
   
  if($date[1]==3){
      $m = "Mar";
  }
   
  if($date[1]==4){
      $m = "Apr";
  }
   
  if($date[1]==5){
      $m = "May";
  }
   
  if($date[1]==6){
      $m = "Jun";
  }
   
  if($date[1]==7){
      $m = "Jul";
  }
   
  if($date[1]==8){
      $m = "Aug";
  }
   
  if($date[1]==9){
      $m = "Sep";
  }
   
  if($date[1]==10){
      $m = "Oct";
  }
   
  if($date[1]==11){
      $m = "Nov";
  }
  if($date[1]==12){
      $m = "Dec";
  }
   $formated = $date[2]." ".$m." ".$date[0];
   return $formated;

}


?>

















<?php
function encode_url($girlname,$boyname,$mobile){
	$n1 = $mobile[-1];
    $n2 = $mobile[-2];
	$n3 = $mobile[-3];
	$boyname = explode(' ',$boyname);
    $girlname = explode(' ',$girlname);
    $b = strtolower($boyname[0]);
    $g = strtolower($girlname[0]);
    $b = ucfirst($b);
    $g = ucfirst($g);  
    $url = "http://www.shadiviah.in/"."Wedding/".$b."weds".$g."_".$n1.$n2.$n3.".php"."/";
    return $url;
}

?>