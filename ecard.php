<?php
header('content-type:image/jpeg');
session_start();
$inviting = strtolower($_SESSION['invitestatus']);
$inviting = ucfirst($inviting);
$secondname = strtoupper($_SESSION['secondname']);

$firstname = strtoupper($_SESSION['firstname']);

$date = $_SESSION['date'];

$link = $_SESSION['link'];

$familystatus = $_SESSION['familystatus'];

$rnd = rand(1,2); 

if($rnd == 1){
    $image = imagecreatefromjpeg("card/shadiviah-invite-certificate.jpg");
}
if($rnd == 2){
    $image = imagecreatefromjpeg("card/shadiviah-invite-certificate_new.jpg");
}


$inviting_len = strlen($inviting);
if($inviting_len >= 35){
$inviting_position = 1500;
}
if($inviting_len < 35 ){
    $inviting_len = 35-$inviting_len;
    $inviting_position = 1500 + ($inviting_len*55);
}






/////inviting name///////
$font ='C://Windows//Fonts//coopbl.ttf'; 
$color = imagecolorallocate($image,253,37,103);
imagettftext($image,160,0,$inviting_position,1190,$color,$font,$inviting);





$first_len = strlen($firstname);
if($first_len >= 35){
$first_position = 1500;
}
if($first_len < 35 ){
    $first_len = 35-$first_len;
    $first_position = 1500 + ($first_len*58);
}


////////boy name////////////
$font2 ='C://Windows//Fonts//alger.ttf'; 
$color2 = imagecolorallocate($image,53,37,103);
imagettftext($image,160,0,$first_position,2190,$color2,$font2,$firstname);







$second_len = strlen($secondname);
if($second_len >= 35){
$second_position = 1500;
}
if($second_len < 35 ){
    $second_len = 35-$second_len;
    $second_position = 1500 + ($second_len*58);
}







//////////girl name//////////
$font3 ='C://Windows//Fonts//alger.ttf'; 
$color3 = imagecolorallocate($image,53,37,103);
imagettftext($image,160,0,$second_position,3040,$color3,$font3,$secondname);




//////////date ////////////
$font4 = "C://Windows//Fonts//centaur.ttf";
$color4 = imagecolorallocate($image,20,20,23);
imagettftext($image,100,0,3200,3640,$color4,$font4,$date);


$linkfont = 80;
$link_len = strlen($link);
if($link_len >= 90){
    $link_position = 1300;
}
    
if($link_len >= 100){
    $link_position = 1200;
}

if($link_len >= 110){
    $link_position = 1000;
}
if($link_len >=120){
    $link_position = 1000;
    $linkfont = 70;
}
if($link_len >=140){
    $link_position = 1400;
    $linkfont = 60;
    if($link_len >= 150){
        $link_position = 1300;
    }
    if($link_len>=160){
        $link_position = 1200;
    }
    if($link_len>=170){
        $link_position = 1100;
        $linkfont = 50;
    }
    if($link_len>=180){
        $link_position = 1000;
    }
}
    if($link_len < 90 ){
        $link_len = 90-$link_len;
        $link_position = 1500 + ($link_len*23);
    }
    
    
    


//////////link////////////
$font5 = "C://Windows//Fonts//centaur.ttf";
$color5 = imagecolorallocate($image,20,20,23);
imagettftext($image,$linkfont,0,$link_position,4340,$color5,$font5,$link);



imagejpeg($image);
imagedestroy($image);
 
 


?>