<?php
  include '../all_updation.php';
  if(!isset($_POST['boymother'])){
      header('location:http://shadiviah.in/');
  }
  updateboymother($_POST['boymother']);
  echo "<script>window.location.assign('../../../User/Pannel');</script>"
?>