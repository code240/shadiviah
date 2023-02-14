<?php
if(isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    $ok = 1;
}
if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    header('location:../../Home-Shadiviah');
}
?>