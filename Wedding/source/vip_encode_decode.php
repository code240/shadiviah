

<?php
  function decode_date_ymd($date){
	  $date = explode("-",$date);
	  $date[1] = (int)$date[1];
	   
	  if($date[1]==1){
		$m = "Jan";
	}
	 
	if($date[1]==2){
		$m = "Feb";
	}
	 
	if($date[1]==3){
		$m = "Mar";
	}
	 
	if($date[1]==4){
		$m = "Apr";
	}
	 
	if($date[1]==5){
		$m = "May";
	}
	 
	if($date[1]==6){
		$m = "Jun";
	}
	 
	if($date[1]==7){
		$m = "Jul";
	}
	 
	if($date[1]==8){
		$m = "Aug";
	}
	 
	if($date[1]==9){
		$m = "Sep";
	}
	 
	if($date[1]==10){
		$m = "Oct";
	}
	 
	if($date[1]==11){
		$m = "Nov";
	}
	if($date[1]==12){
		$m = "Dec";
	}
	 $formated = $date[2]." ".$m." ".$date[0];
	 return $formated;
  }
?>
