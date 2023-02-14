<?php

// $res = messagefilter("<span style='color:red;'> Vipin Rao </span>");
// echo $res;
function namefilter($name){
    $len = strlen($name);
    for($x=0;$x<$len;$x++){
        if($name[$x]=='<'){
            $name = str_replace('<','&#60;',$name);
        }
        if($name[$x]=='>'){
            $name = str_replace('>','&#62;',$name);
        }
        if($name[$x]=='='){
            $name = str_replace('=','&#61;',$name);
        }
        if($name[$x]=='?'){
            $name = str_replace('=','&#63;',$name);
        }
    }
    return $name;
}
 

function messagefilter($message){
   $deletestatus = 0;
   $abuse = array('chut','lund','gand','madarchod','bhnchod','bhenchod','mdrchd','bsdk','bosdike','bhosdike','chutia','chuttiya','chuttia','bund','fuddi','penis','ovary','vagina','dick','cock','pussey','terimakichut','bhenkalund','bhnkalnd','bkl','bhnkalund','betichod','chorichod','fuck','bitch','gndmra','mc','bavligand','shyanigand','shanigand','lawde','lode','bkchod','backchod','ass','asshole','assfuck','suck','gangbang','madarjat','choot','chuda','chudan','chudayi','chudai','chudaayin','choodayin','choodai','jhat','jhaat','jhant','jhaant','chutt','bhosda','bhadva','bhadwa','randi','raand','rand','randibaz','randibaaz','raandibaz','bhosdike','bhosdikey','bosdike','bosdikey','bhosdika','bosdika','bhoasdika','bhoadikey','bhoasdike','chuttiye','chuttiyan','chutiyaen','chodega','choduga','lawade','lavde','lawde','lode','lodu','lawdu','lavdu','chuchi','chuchii','chuuchii','choochi','choochii','chochi','chochii','boobs','bubbu','booba','boba','buba','motherfucker','wifefucker','sisterfucker','gandu','gaandu','ganduu','gaanduu','gandoo','gundoo','pelu','pel','peli','paili','pailu','paila','peluga','pelungaa','pailungaa','pailuga');
   $message = strtolower($message);
//    echo $message."<br><br><br>";
   $msg_array = explode("\n",$message);
   $msg_count = count($msg_array);
  
   for($i=0;$i<$msg_count;$i++){
       $line = $msg_array[$i];
       $line_array = explode(" ",$line);
       $line_len = count($line_array);
       for($j=0;$j<$line_len;$j++){
          $word = $line_array[$j];
          $word = trim($word, " \t\n\r\0\x0B\x08");
        //   echo $word.strlen($word)."<br><br>";
           if(in_array($word,$abuse)){
               $deletestatus = 2;
               break;
           }
        //    else{
        //     $word = $line_array[$j];
        //     $new = "";
        //     $word_len = strlen($word)-1;
        //     for($d=0;$d<$word_len;$d++){
        //         $new .= $word[$d];
        //     }
        //     $word = $new;
            
        //    }
       }
   }
   return $deletestatus;
}


?>