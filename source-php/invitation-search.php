<?php
if(isset($_POST['wed'])){
    $get_wedcode = $_POST['wed'];
    $con=mysqli_connect('localhost','root','','shadiviah');

    if(mysqli_connect_errno()){
      $con=mysqli_connect('localhost','root','','shadiviah');
    } 
    $queryfire = "select * from wedding where wedding_code = '$get_wedcode' or mobile='$get_wedcode' and deletestatus = 0";
    $getresult = mysqli_query($con,$queryfire);
    $rowcount_main = mysqli_num_rows($getresult);
    if($rowcount_main > 0){
        $ii=0;
        while($result = mysqli_fetch_array($getresult)){
            $boyname[$ii] = $result['boy'];
            $girlname[$ii] = $result['girl'];
            $pagename[$ii] = $result['pagename'];
            $mobile[$ii] = $result['mobile'];
            $date[$ii]  = date_decode($result['barat_date']);
            $wedcodeX[$ii] = $result['wedding_code'];
            $url[$ii] = "http://shadiviah.in/Wedding/".$pagename[$ii].".php";
            $ii++;
        }
    if($ii==1){
    $queryfire = "select * from wedding_images where weddingcode = '$wedcodeX[0]' and feature = 2 and deletestatus=0";
    $getdata = mysqli_query($con,$queryfire);
    $rowcount = mysqli_num_rows($getdata);
    if($rowcount==0){
       $queryfireTwo = "select * from wedding_images where weddingcode = '$wedcodeX[0]' and feature = 1 and deletestatus=0";
       $getdataTwo  = mysqli_query($con,$queryfireTwo);
       $rowcountTwo = mysqli_num_rows($getdataTwo);
       if($rowcountTwo == 0){
           $wedphoto[0] = "couple-shadiviah_welto3rfiherog3qhfhew9ghfbev3q94woehffh3weji.jpg";
        //    $wedcodeX[0] = $wedcodeX;
           
       }
       if($rowcountTwo > 0){
           $s=0;
           while($resultTwo = mysqli_fetch_array($getdataTwo)){
               $photos[$s] = $resultTwo['image'];
               $s++;
           }
           $random_s = rand(0,$s-1);
           $wedphoto[0] = $photos[$random_s];

       }
           
    }
    if($rowcount>0){
        $r=0;
        while($result = mysqli_fetch_array($getdata)){
           $img[$r]  =  $result['image'];
           $r=$r+1;
        }
        $random_r = rand(0,$r-1);
        $wedphoto[0] = $img[$random_r];

    }

    }
    if($ii>1){
     for($ee=0; $ee<$ii; $ee++){
        //  echo $wedcodeX[$s];
        $queryfire = "select * from wedding_images where weddingcode = '$wedcodeX[$ee]' and feature = 2 and deletestatus=0";
        $getdata = mysqli_query($con,$queryfire);
        $rowcount = mysqli_num_rows($getdata);
        if($rowcount==0){
            $queryfireTwo = "select * from wedding_images where weddingcode = '$wedcodeX[$ee]' and feature = 1 and deletestatus=0";
            $getdataTwo  = mysqli_query($con,$queryfireTwo);
            $rowcountTwo = mysqli_num_rows($getdataTwo);
            if($rowcountTwo == 0){
                $wedphoto[$ee] = "couple-shadiviah_welto3rfiherog3qhfhew9ghfbev3q94woehffh3weji.jpg";
     
            }
            if($rowcountTwo > 0){
                $s=0;
                while($resultTwo = mysqli_fetch_array($getdataTwo)){
                    $photos[$s] = $resultTwo['image'];
                    $s++;
                }
                $random_s = rand(0,$s-1);
                $wedphoto[$ee] = $photos[$random_s];
            }
                
         }
         if($rowcount>0){
             $r=0;
             while($result = mysqli_fetch_array($getdata)){
                $img[$r]  =  $result['image'];
                $r=$r+1;
             }
             $random_r = rand(0,$r-1);
             $wedphoto[$ee] = $img[$random_r];
         }
     
     }
    }
}
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