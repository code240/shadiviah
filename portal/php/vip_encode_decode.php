<?php

function decode($text){

$set=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9',' ');

                      //  63 ELEMENTS & 62 INDEXES

$encodeset = array('we','sw','yu','tu','3r','5h','3l','6q','9i','3p','2w','0w','1b','oe','0q','qw','pw','jg','qj','qp','ip','mt','av','er','zs','xo','WE','SW','YU','TU','3R','5H','3L','6Q','9I','3P','2W','0W','1B','OE','0Q','QW','PW','JG','QJ','QP','IP','MT','AV','ER','ZS','XO', 'zz','oo','tt','rr','uu','vv','xx','qq','gg','nn','ss');

$num = strlen($text);
if($num%2!=0){
	return 0;
}
$decoded="";
$couple="";
for($i=0;$i<strlen($text);$i++){
	$couple = $couple.$text[$i].$text[$i+1];
	$i++;
	if(in_array($couple,$encodeset)){
	    for($j=0;$j<63;$j++){
		    if($couple==$encodeset[$j]){
		    	$decoded = $decoded.$set[$j];
		    }
           
		}	
	}
	else{
			$decoded = $decoded.$couple[0];
		}

	$couple="";
}
return $decoded;
}



?>



<?php
function encode($text){


$set=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9',' ');

                      //  63 ELEMENTS & 62 INDEXES

$encodeset = array('we','sw','yu','tu','3r','5h','3l','6q','9i','3p','2w','0w','1b','oe','0q','qw','pw','jg','qj','qp','ip','mt','av','er','zs','xo','WE','SW','YU','TU','3R','5H','3L','6Q','9I','3P','2W','0W','1B','OE','0Q','QW','PW','JG','QJ','QP','IP','MT','AV','ER','ZS','XO', 'zz','oo','tt','rr','uu','vv','xx','qq','gg','nn','ss');


$coded="";
for($i=0;$i<strlen($text);$i++){
	if(in_array($text[$i],$set)){
		for($j=0;$j<63;$j++){
           if($text[$i]==$set[$j]){
           	  $coded = $coded.$encodeset[$j];
           }
		}
 	    
	  }	
	else{
		$coded = $coded.$text[$i].$text[$i];
	}
}
return $coded;
}


?>


<?php
  function decode_date_ymd($date){
	  $date = explode("-",$date);
	  $date[1] = (int)$date[1];
	   
	  if($date[1]==1){
		$m = "January";
	}
	 
	if($date[1]==2){
		$m = "Febuary";
	}
	 
	if($date[1]==3){
		$m = "March";
	}
	 
	if($date[1]==4){
		$m = "April";
	}
	 
	if($date[1]==5){
		$m = "May";
	}
	 
	if($date[1]==6){
		$m = "June";
	}
	 
	if($date[1]==7){
		$m = "July";
	}
	 
	if($date[1]==8){
		$m = "August";
	}
	 
	if($date[1]==9){
		$m = "September";
	}
	 
	if($date[1]==10){
		$m = "October";
	}
	 
	if($date[1]==11){
		$m = "November";
	}
	if($date[1]==12){
		$m = "December";
	}
	 $formated = $date[2]." ".$m." ".$date[0];
	 return $formated;
  }
?>

<?php
function encode_url($girlname,$boyname,$mobile){
	$n1 = $mobile[-1];
    $n2 = $mobile[-2];
	$n3 = $mobile[-3];
	$boyname = explode(' ',$boyname);
    $girlname = explode(' ',$girlname);
    $b = strtolower($boyname[0]);
    $g = strtolower($girlname[0]);
    $b = ucfirst($b);
    $g = ucfirst($g);  
    $url = "http://www.shadiviah.in/"."Wedding/".$b."weds".$g."_".$n1.$n2.$n3.".php"."/";
    return $url;
}

?>