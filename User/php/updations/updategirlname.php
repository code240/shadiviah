<?php
  include '../all_updation.php';
  if(!isset($_POST['girl'])){
      header('location:http://shadiviah.in/');
  }
  updategirlname($_POST['girl']);
  echo "<script>window.location.assign('../../../User/Pannel');</script>"
?>