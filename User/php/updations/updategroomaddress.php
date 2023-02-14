<?php
  include '../all_updation.php';
  if(!isset($_POST['boyaddress'])){
    header('location:http://shadiviah.in/');
}
  updategroomaddress($_POST['boyaddress']);
  echo "<script>window.location.assign('../../../User/Pannel');</script>"
?>