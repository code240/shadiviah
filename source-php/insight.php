<?php

function indexinsight(){

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
    $queryfire = "select indexvisit from insight where control = $minustarget and date = $date";

    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
        $indexvisit = $result['indexvisit'];
    }
    $indexvisit = (int)$indexvisit;
    $indexvisit = $indexvisit + 1;
    $queryfire = "update insight set indexvisit = $indexvisit Where control = $minustarget and date = $date";
    mysqli_query($con,$queryfire);
    
}
if($dbdate != $date){
$queryfire = "
    UPDATE insight
    SET indexvisit = 1,
    newvisit = 0,
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
} //Function index insight end
?>


<?php
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
?>


<?php

function aboutinsight(){

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
    $queryfire = "select aboutvisit from insight where control = $minustarget and date = $date";

    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
        $aboutvisit = $result['aboutvisit'];
    }
    $aboutvisit = (int)$aboutvisit;
    $aboutvisit = $aboutvisit + 1;
    $queryfire = "update insight set aboutvisit = $aboutvisit Where control = $minustarget and date = $date";
    mysqli_query($con,$queryfire);
    
}
if($dbdate != $date){
$queryfire = "
    UPDATE insight
    SET indexvisit = 0,
    newvisit = 0,
    contactvisit = 0,
    aboutvisit = 1,
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
} //Function index insight end
?>

<?php
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
?>


<?php

function contactinsight(){

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
    $queryfire = "select contactvisit from insight where control = $minustarget and date = $date";

    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
        $contactvisit = $result['contactvisit'];
    }
    $contactvisit = (int)$contactvisit;
    $contactvisit = $contactvisit + 1;
    $queryfire = "update insight set contactvisit = $contactvisit Where control = $minustarget and date = $date";
    mysqli_query($con,$queryfire);
    
}
if($dbdate != $date){
$queryfire = "
    UPDATE insight
    SET indexvisit = 0,
    newvisit = 0,
    contactvisit = 1,
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
} //Function index insight end
?>

<?php
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
?>


<?php

function mediatorinsight(){

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
    $queryfire = "select mediatorvisit from insight where control = $minustarget and date = $date";

    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
        $mediatorvisit = $result['mediatorvisit'];
    }
    $mediatorvisit = (int)$mediatorvisit;
    $mediatorvisit = $mediatorvisit + 1;
    $queryfire = "update insight set mediatorvisit = $mediatorvisit Where control = $minustarget and date = $date";
    mysqli_query($con,$queryfire);
    
}
if($dbdate != $date){
$queryfire = "
    UPDATE insight
    SET indexvisit = 0,
    newvisit = 0,
    contactvisit = 0,
    aboutvisit = 0,
    helpvisit = 0,
    mediatorvisit = 1,
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
} //Function index insight end
?>

<?php
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
?>


<?php

function themeoneinsight(){

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
    $queryfire = "select themeonevisit from insight where control = $minustarget and date = $date";

    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
        $themeonevisit = $result['themeonevisit'];
    }
    $themeonevisit = (int)$themeonevisit;
    $themeonevisit = $themeonevisit + 1;
    $queryfire = "update insight set themeonevisit = $themeonevisit Where control = $minustarget and date = $date";
    mysqli_query($con,$queryfire);
    
}
if($dbdate != $date){
$queryfire = "
    UPDATE insight
    SET indexvisit = 0,
    newvisit = 0,
    contactvisit = 0,
    aboutvisit = 0,
    helpvisit = 0,
    mediatorvisit = 0,
    themeonevisit = 1,
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
} //Function index insight end
?>

<?php
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
?>


<?php

function themetwoinsight(){

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
    $queryfire = "select themetwovisit from insight where control = $minustarget and date = $date";

    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
        $themetwovisit = $result['themetwovisit'];
    }
    $themetwovisit = (int)$themetwovisit;
    $themetwovisit = $themetwovisit + 1;
    $queryfire = "update insight set themetwovisit = $themetwovisit Where control = $minustarget and date = $date";
    mysqli_query($con,$queryfire);
    
}
if($dbdate != $date){
$queryfire = "
    UPDATE insight
    SET indexvisit = 0,
    newvisit = 0,
    contactvisit = 0,
    aboutvisit = 0,
    helpvisit = 0,
    mediatorvisit = 0,
    themeonevisit = 0,
    themetwovisit = 1,
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
} //Function index insight end
?>


<?php
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
?>


<?php

function themethreeinsight(){

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
    $queryfire = "select themethreevisit from insight where control = $minustarget and date = $date";

    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
        $themethreevisit = $result['themethreevisit'];
    }
    $themethreevisit = (int)$themethreevisit;
    $themethreevisit = $themethreevisit + 1;
    $queryfire = "update insight set themethreevisit = $themethreevisit Where control = $minustarget and date = $date";
    mysqli_query($con,$queryfire);
    
}
if($dbdate != $date){
$queryfire = "
    UPDATE insight
    SET indexvisit = 0,
    newvisit = 0,
    contactvisit = 0,
    aboutvisit = 0,
    helpvisit = 0,
    mediatorvisit = 0,
    themeonevisit = 0,
    themetwovisit = 0,
    themethreevisit = 1,
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
} //Function index insight end
?>



<?php
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
?>


<?php

function themefourinsight(){

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
    $queryfire = "select themefourvisit from insight where control = $minustarget and date = $date";

    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
        $themefourvisit = $result['themefourvisit'];
    }
    $themefourvisit = (int)$themefourvisit;
    $themefourvisit = $themefourvisit + 1;
    $queryfire = "update insight set themefourvisit = $themefourvisit Where control = $minustarget and date = $date";
    mysqli_query($con,$queryfire);
    
}
if($dbdate != $date){
$queryfire = "
    UPDATE insight
    SET indexvisit = 0,
    newvisit = 0,
    contactvisit = 0,
    aboutvisit = 0,
    helpvisit = 0,
    mediatorvisit = 0,
    themeonevisit = 0,
    themetwovisit = 0,
    themethreevisit = 0,
    themefourvisit = 1,
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
} //Function index insight end
?>




<?php
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
?>


<?php

function themefiveinsight(){

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
    $queryfire = "select themefivevisit from insight where control = $minustarget and date = $date";

    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
        $themefivevisit = $result['themefivevisit'];
    }
    $themefivevisit = (int)$themefivevisit;
    $themefivevisit = $themefivevisit + 1;
    $queryfire = "update insight set themefivevisit = $themefivevisit Where control = $minustarget and date = $date";
    mysqli_query($con,$queryfire);
    
}
if($dbdate != $date){
$queryfire = "
    UPDATE insight
    SET indexvisit = 0,
    newvisit = 0,
    contactvisit = 0,
    aboutvisit = 0,
    helpvisit = 0,
    mediatorvisit = 0,
    themeonevisit = 0,
    themetwovisit = 0,
    themethreevisit = 0,
    themefourvisit = 0,
    themefivevisit = 1,
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
} //Function theme five insight end
?>



<?php
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
?>


<?php

function helpinsight(){

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
    $queryfire = "select helpvisit from insight where control = $minustarget and date = $date";

    $getdata = mysqli_query($con , $queryfire);
    while($result=mysqli_fetch_array($getdata)){
        $helpvisit = $result['helpvisit'];
    }
    $helpvisit = (int)$helpvisit;
    $helpvisit = $helpvisit + 1;
    $queryfire = "update insight set helpvisit = $helpvisit Where control = $minustarget and date = $date";
    mysqli_query($con,$queryfire);
    
}
if($dbdate != $date){
$queryfire = "
    UPDATE insight
    SET indexvisit = 0,
    newvisit = 0,
    contactvisit = 0,
    aboutvisit = 0,
    helpvisit = 1,
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
} //Function theme five insight end
?>





<?php
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
// #
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