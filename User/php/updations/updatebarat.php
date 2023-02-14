<?php
  include '../all_updation.php';
  if(!isset($_POST['barat'])){
      header('location:http://shadiviah.in/');
  }
  updatebarat($_POST['barat']);
  echo "<script>window.location.assign('../../../User/Pannel');</script>"
?>