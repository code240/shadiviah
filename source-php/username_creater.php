<?php
function getusername($name){
// $name = "rahul  sharma";
// echo "<br>";
$name = str_replace(" ","",$name);
$num1 = rand(0,9);
$num2 = rand(0,9);
$num3 = rand(1000,9999);

$username = $name.$num1.$num2."_".$num3;
return $username;
}
?>


<?php
function getusernameshort($name){
// $name = "rahul  sharma";
// echo "<br>";
$name = str_replace(" ","",$name);
$name = strtolower($name);
$num1 = rand(0,9);
$num2 = rand(0,9);
$num3 = rand(0,9);

$username = $name.$num1.$num2.$num3;
return $username;
}
?>