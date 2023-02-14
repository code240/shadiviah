<?php
function getnewname($getname){
$extension_array = explode(".",$getname);
$array_len = count($extension_array);
$extension = $extension_array[$array_len-1];
date_default_timezone_set('Asia/Kolkata');
$time = date("d_m_y_h_i_s_");
$explode = explode(".",microtime());
$microtime = $explode[1];
$imagename = "Couples_image_Mediator_uploaded_".$time.$microtime.".".$extension;
return $imagename;
}
function getnewfamilyname($getname){
    $extension_array = explode(".",$getname);
    $array_len = count($extension_array);
    $extension = $extension_array[$array_len-1];
    date_default_timezone_set('Asia/Kolkata');
    $time = date("d_m_y_h_i_s_");
    $explode = explode(".",microtime());
    $microtime = $explode[1];
    $imagename = "Family_image_Mediator_uploaded_".$time.$microtime.".".$extension;
    return $imagename;
    }
?>