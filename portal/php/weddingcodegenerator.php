<?php
function createcode($boy,$girl){
    $alpha = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $n1 = rand(0,25); 
    $n2 = rand(0,25); 
    $n3 = rand(0,9); 
    $boy = strtoupper($boy);
    $girl = strtoupper($girl);
    $weddingcode = $boy[0].$boy[1].$boy[2]."WEDS".$girl[0].$girl[1].$girl[2]."_".$n3.$alpha[$n1].$alpha[$n2];
    return $weddingcode;
}

?>