<?php
  include '../all_updation.php';
  if(!isset($_POST['lagan'])){
      header('location:http://shadiviah.in/');
  }
  updatelagan($_POST['lagan']);
  echo "<script>window.location.assign('../../../User/Pannel');</script>"
?>