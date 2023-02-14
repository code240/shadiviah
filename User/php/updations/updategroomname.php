<?php
  include '../all_updation.php';
  if(!isset($_POST['boy'])){
    header('location:http://shadiviah.in/');
}
  updategroomname($_POST['boy']);
  echo "<script>window.location.assign('../../../User/Pannel');</script>"
?>