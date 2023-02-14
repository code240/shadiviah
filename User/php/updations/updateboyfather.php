<?php
  include '../all_updation.php';
  if(!isset($_POST['boyfather'])){
      header('location:http://shadiviah.in/');
  }
  updateboyfather($_POST['boyfather']);
  echo "<script>window.location.assign('../../../User/Pannel');</script>"
?>