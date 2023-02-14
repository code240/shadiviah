<?php
  include '../all_updation.php';
  if(!isset($_POST['girlfather'])){
      header('location:http://shadiviah.in/');
  }
  updategirlfather($_POST['girlfather']);
  echo "<script>window.location.assign('../../../User/Pannel');</script>"
?>