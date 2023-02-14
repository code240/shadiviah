<?php
include 'vip_encode_decode.php';
?>


<?php

function if_admin_already_login(){
  if(isset($_COOKIE['Shadiviah_Login'])){
     session_start();
     $getcookie = $_COOKIE['Shadiviah_Login'];
     $getcookie = decode($getcookie);
    //  echo $getcookie;
     $_SESSION['adminusername'] = $getcookie;
     header("location:pannel/pannel.php");
  }
}

function if_mediator_already_login(){
  if(isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
     session_start();
     $getcookie = $_COOKIE['SHADIVIAH_MEDIATOR'];
     $getcookie = decode($getcookie);
    //  echo $getcookie;
     $_SESSION['mediatorusername'] = $getcookie;
     header("location:Portal/Mediator-Access");
  }
}


  function login_confirm(){
      if(!isset($_COOKIE['Shadiviah_Login'])){
          header("location:../index.php");
      }
  }
?>