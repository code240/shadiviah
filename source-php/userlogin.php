<?php
include 'vip_encode_decode.php';
if(!isset($_POST['username']) || !isset($_POST['password'])){
    header("location:../signin");
    exit;
}
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$user_first_time = 0;
$second_possiblity = 0;

$con=mysqli_connect('localhost','root','','shadiviah');
if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
}  
$u = explode("@",$username);
$u_len = count($u);
if($u_len>2){
    $_SESSION['EmailError'] = $username;

    echo "<script>alert('Username Error!!'); window.location.assign('../Signin');</script>";
}
if($u_len==2){
    $second_possiblity++; 
    $useremail = strtolower($username);
    $queryfire = "SELECT * from users_info where email='$useremail' AND deletestatus=0";
    $get_data = mysqli_query($con,$queryfire);
    $email_rowcount = mysqli_num_rows($get_data);
    if($email_rowcount==0){
        $_SESSION['EmailError'] = $username;
        echo "<script>alert('Incorrect Email Address!!'); window.location.assign('../Signin');</script>";
        mysqli_close($con);
        exit;
    }
    if($email_rowcount==1){
        $password_encoded = encode($password);
        
        $queryfire="SELECT * FROM users_info WHERE email = '$useremail' AND passcode = '$password_encoded' AND deletestatus=0";
        $get_data_psw = mysqli_query($con,$queryfire);
        $psw_rowcount = mysqli_num_rows($get_data_psw);
       
        if($psw_rowcount==0){
           $_SESSION['PswError'] = $password;
           $_SESSION['EmailNoError'] = $username;
           echo "<script>alert('Incorrect password!!'); window.location.assign('../Signin');</script>";
           mysqli_close($con);
           exit;
        }
        if($psw_rowcount==1){
           while($result = mysqli_fetch_array($get_data_psw)){
               $name = $result['name'];
               $wedcode = $result['wedding_code'];
           }
           $cookie_name = "shadiviah_family";
           $cookie_value = encode($wedcode);
           setcookie($cookie_name, $cookie_value, time() + (3600*24*90), "/");
           header("location:../User/Pannel");
           mysqli_close($con);
           exit;
        }
    }
}
if($u_len==1){
    $queryfire = "SELECT * FROM users_info WHERE mobile = '$username'  AND deletestatus=0";
    $get_data = mysqli_query($con,$queryfire);
    $phn_rowcount = mysqli_num_rows($get_data);

    if($phn_rowcount==1){
        $temp_username = $_POST['username']; 
        $encode_psw = encode($_POST['password']); 
        $queryfire = "SELECT * FROM users_info WHERE mobile = '$temp_username' AND passcode = '$encode_psw' AND deletestatus=0";
        $get_login_data_by_phnnmbr_in_userinfo = mysqli_query($con,$queryfire);
        $rowcount_phn_ps = mysqli_num_rows($get_login_data_by_phnnmbr_in_userinfo);
        if($rowcount_phn_ps==0){
            $code = $_POST['password'];
            $mb = $_POST['username'];
            $queryfire = "SELECT * FROM wedding WHERE mobile = '$mb' AND wedding_code = '$code' AND deletestatus=0";
            $get_my_data_one = mysqli_query($con,$queryfire);
            $get_my_row_one = mysqli_num_rows($get_my_data_one);
            if($get_my_row_one==1){
                $queryfire = "SELECT * FROM users_info WHERE wedding_code = '$code' AND deletestatus=0";
                $get_data_two = mysqli_query($con,$queryfire);
                $get_row_two = mysqli_num_rows($get_data_two);
                if($get_row_two==1){
                    $_SESSION['PswError'] = $password;
                    $_SESSION['EmailNoError'] = $username;
                    echo "<script>alert('Incorrect password!!'); window.location.assign('../Signin');</script>";
                    mysqli_close($con);
                    exit;
                }
                if($get_row_two==0){
                    while($result = mysqli_fetch_array($get_my_data_one)){
                        $wedcode = $result['wedding_code'];
                        $mobile = $result['mobile'];
                    }
                    session_unset();
                    $_SESSION['wedcode'] = $wedcode;
                    $_SESSION['mobile'] = $mobile;
                    header('location:../info');
                    mysqli_close($con);
                    exit;
                }

            }
            if($get_my_row_one==0){
                $_SESSION['PswError'] = $password;
                $_SESSION['EmailNoError'] = $username;
                echo "<script>alert('Incorrect password!!'); window.location.assign('../Signin');</script>";
                mysqli_close($con);
                exit;
            }
            
        }
        if($rowcount_phn_ps==1){
            while($result = mysqli_fetch_array($get_login_data_by_phnnmbr_in_userinfo)){
                $name = $result['name'];
                $wedcode = $result['wedding_code'];
            }
            $cookie_name = "shadiviah_family";
            $cookie_value = encode($wedcode);
            setcookie($cookie_name, $cookie_value, time() + (3600*24*90), "/");
            header("location:../User/Pannel");
            mysqli_close($con);
            exit;
        }
        
    }

    if($phn_rowcount==0){
       $user_first_time=1;
    }
}
if($user_first_time==1){
    $mb= $_POST['username'];
    $W_code = $_POST['password'];
    $queryfire = "SELECT * FROM wedding WHERE mobile = '$mb' AND deletestatus=0";
    $get_wed_mob_data = mysqli_query($con,$queryfire);
    $get_wed_mob_row_count = mysqli_num_rows($get_wed_mob_data);
    if($get_wed_mob_row_count==0){
        $_SESSION['EmailError'] = $username;
        echo "<script>alert('Incorrect Mobile Number!!'); window.location.assign('../Signin');</script>";
        mysqli_close($con);
        exit;
    }
    if($get_wed_mob_row_count>0){
       $queryfire = "SELECT * FROM wedding WHERE mobile = '$mb' AND wedding_code = '$W_code' AND deletestatus=0";
       $get_data_final = mysqli_query($con,$queryfire);
       $get_final_rowcount = mysqli_num_rows($get_data_final);
       if($get_final_rowcount==0){
          $_SESSION['PswError'] = $password;
          $_SESSION['EmailNoError'] = $username;
          echo "<script>alert('!! Incorrect Password !!'); window.location.assign('../Signin');</script>";
          mysqli_close($con);
          exit;
       }
       if($get_final_rowcount==1){
           while($result=mysqli_fetch_array($get_data_final)){
               $wedcode = $result['wedding_code'];
               $mobile = $result['mobile'];
           }
           session_unset();
           $_SESSION['wedcode'] = $wedcode;
           $_SESSION['mobile'] = $mobile;
           header('location:../info');
           mysqli_close($con);
           
       }
    }
}

?>