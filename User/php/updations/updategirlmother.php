<?php
  include '../all_updation.php';
  if(!isset($_POST['girlmother'])){
      header('location:http://shadiviah.in/');
  }
  updategirlmother($_POST['girlmother']);
  echo "<script>window.location.assign('../../../User/Pannel');</script>"
?>