<?php
  include '../all_updation.php';
  if(!isset($_POST['girladdress'])){
      header('location:http://shadiviah.in/');
  }
  updategirladdress($_POST['girladdress']);
  echo "<script>window.location.assign('../../../User/Pannel');</script>"
?>