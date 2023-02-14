<?php

function list_for_index_page(){

    $con=mysqli_connect('localhost','root','','shadiviah');

    if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
    }
    $queryfire = "select * from mediators where deletestatus = 0";
    $getresult = mysqli_query($con , $queryfire);
    $rowcount = mysqli_num_rows($getresult);
    // echo $rowcount;
    
    if($rowcount>6){
        $i=0;
        while($result=mysqli_fetch_array($getresult)){
            $mediator_name[$i]      = $result['name'];
            $mediator_shopname[$i]  = $result['shopname'];
            $mediator_mobile[$i]    =  $result['mobileone'];
            $mediator_address[$i]   = $result['address'];
            $mediator_image[$i]     =  $result['image'];
            $i++;
        }
        $i=$i-1;
        $random = array();
        while(1){
            $len = count($random);
            if($len==6){break;}
            $r = rand(0,$i);
            if(!in_array($r,$random)){
                array_push($random,$r);
            }
        }
        for($k=0;$k<6;$k++){
            $m_name[$k] = $mediator_name[$random[$k]];
            $m_shopname[$k] = $mediator_shopname[$random[$k]];
            $m_address[$k] = $mediator_address[$random[$k]];
            $m_mobile[$k] = $mediator_mobile[$random[$k]];
            $m_image[$k] = $mediator_image[$random[$k]];
        }
        $totalvalues = 6;
        return array($totalvalues,$m_name,$m_shopname,$m_address,$m_mobile,$m_image); 
        
        
    }
    if($rowcount <= 6){
        $a = 0;
        while($result = mysqli_fetch_array($getresult)){
            $m_address[$a] = $result['address']; 
            $m_image[$a] = $result['image'];
            $m_name[$a] = $result['name'];
            $m_shopname[$a] = $result['shopname'];
            $m_mobile[$a] = $result['mobileone'];
            $a=$a+1;
        }
        $totalvalues = $a;
    }
    return array($totalvalues,$m_name,$m_shopname,$m_address,$m_mobile,$m_image); 
}


function if_zero_mediator(){
    $con=mysqli_connect('localhost','root','','shadiviah');

    if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
    }
    $queryfire = "select * from mediators where deletestatus = 0";
    $getresult = mysqli_query($con , $queryfire);
    $rowcount = mysqli_num_rows($getresult);
    // echo $rowcount;
    
    if($rowcount==0){
       return 0;
    }else{
        return 1;
    }
}


function mediator_list_for_mediator_page(){
    $con=mysqli_connect('localhost','root','','shadiviah');

    if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
    }
    $queryfire = "select * from mediators where deletestatus = 0";
    $getresult = mysqli_query($con , $queryfire);
    // $rowcount = mysqli_num_rows($getresult);
    // echo $rowcount;
    
    $a = 0;
        while($result = mysqli_fetch_array($getresult)){
            $m_address[$a] = $result['address']; 
            $m_image[$a] = $result['image'];
            $m_name[$a] = $result['name'];
            $m_shopname[$a] = $result['shopname'];
            $m_mobile[$a] = $result['mobileone'];
            $a=$a+1;
        }
        $totalvalues = $a;
        return array($totalvalues,$m_name,$m_shopname,$m_address,$m_mobile,$m_image); 
    
}






function mediator_list_for_mediator_page_with_random_feature(){
    $con=mysqli_connect('localhost','root','','shadiviah');

    if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
    }
    $queryfire = "select * from mediators where deletestatus = 0";
    $getresult = mysqli_query($con , $queryfire);
    // $rowcount = mysqli_num_rows($getresult);
    // echo $rowcount;
    
    $i=0;
    while($result=mysqli_fetch_array($getresult)){
        $mediator_name[$i]      = $result['name'];
        $mediator_shopname[$i]  = $result['shopname'];
        $mediator_mobile[$i]    =  $result['mobileone'];
        $mediator_address[$i]   = $result['address'];
        $mediator_image[$i]     =  $result['image'];
        $i++;
    }
    $i=$i-1;
    $random = array();
    while(1){
        $len = count($random);
        if($len==$i+1){break;}
        $r = rand(0,$i);
        if(!in_array($r,$random)){
            array_push($random,$r);
        }
    }
    for($k=0;$k<$i+1;$k++){
        $m_name[$k] = $mediator_name[$random[$k]];
        $m_shopname[$k] = $mediator_shopname[$random[$k]];
        $m_address[$k] = $mediator_address[$random[$k]];
        $m_mobile[$k] = $mediator_mobile[$random[$k]];
        $m_image[$k] = $mediator_image[$random[$k]];
    }
    $totalvalues = $i+1;
    return array($totalvalues,$m_name,$m_shopname,$m_address,$m_mobile,$m_image); 
    
}
?>