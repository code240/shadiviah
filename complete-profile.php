<?php
error_reporting(0);

  session_start();
  if(!isset($_SESSION['wedcode']) || !isset($_SESSION['mobile'])){
      header('location:Signin');
      exit;
  }
  $show = 0;


  $em = "";
  $em_two = "";
  $mb = "";
  $nm = "";
  $message="";
  
  if(isset($_SESSION['note'])){
      if($_SESSION['note']=='MobileError'){
          $message = "The Mobile Number You Enter is Already in Use.";
          $show =1;
          $em = $_SESSION['email'];
          $em_two = $_SESSION['email_two'];
          $mb = $_SESSION['mobile'];
          $nm = $_SESSION['name'];
          
      }
      
        if($_SESSION['note']=='SuspendError'){
            $message = "I Think You make some bad activity on your account. That's Why Your Account is Suspended or May be there is some other technical fault, So that We cannot give you access to login right now.  <a href='Terms-and-condition-Shadiviah' style='font-weight:bold' >Learn More</a>";
            $show =1;
            $em = $_SESSION['email'];
            $em_two = $_SESSION['email_two'];
            $mb = $_SESSION['mobile'];
            $nm = $_SESSION['name'];
            
        }
      if($_SESSION['note']=='EmailError'){
        $message = "The Email Address You Enter is Already in Use.";
        $show =1;
        $em = $_SESSION['email'];
        $em_two = $_SESSION['email_two'];
        $mb = $_SESSION['mobile'];
        $nm = $_SESSION['name'];
        
    }
    if($_SESSION['note']=='ShortError'){
        $message = "The phone number you enter is short. Kindly check it.";
        $show =1;
        $em = $_SESSION['email'];
        $em_two = $_SESSION['email_two'];
        $mb = $_SESSION['mobile'];
        $nm = $_SESSION['name'];
        
    }
    if($_SESSION['note']=='LongError'){
        $message = "The phone number you enter having more than 10 digit. Kindly check it.";
        $show =1;
        $em = $_SESSION['email'];
        $em_two = $_SESSION['email_two'];
        $mb = $_SESSION['mobile'];
        $nm = $_SESSION['name'];
        
    }

  }

  $wedcode = $_SESSION['wedcode'];
  $mobile = $_SESSION['mobile'];
?>

<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <!-- <meta http-equiv="refresh" content="30"> -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
        <link rel="icon" href="site_image/love.png"/>
        <link rel="stylesheet" href="bootcss/animate.css"/>
        <link rel="stylesheet" href="bootcss/bootstrap.min.css"/>
        <link rel="stylesheet" href="bootcss/bootstrap.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="Text/Roboto.css">
        <link rel="stylesheet" href="User/css/login.css"/>
        <link rel="stylesheet" href="User/css/info.css"/>
        <meta name="keywords" content="Complete-Profile,Shadiviah">
        <meta name="description" content="Shadiviah: Make your Wedding memorable. Online Invitations in wedding, Register Wedding online, Get a beautiful Theme, Get an e-card, Share your wedding clips, Share Your wedding album and much more.">
         <meta name="author" content="Sttar Vipin Rao">
        <title>Complete Profile</title>
    
        <script>
          function validform(){
            var name = document.forms['form']['name'].value;
            var mobile = document.forms['form']['mobile'].value;
            var email = document.forms['form']['email'].value;
            var email_two = document.forms['form']['email_two'].value;
            var password = document.forms['form']['password'].value;
            var ps_len = password.length;
            var password_two = document.forms['form']['password_two'].value;
            var check = document.getElementById("check_id");
            var result = password.localeCompare(password_two);
            
            if(name.trim()==""){
                alert("Enter The Name");
                document.getElementById("name").style.border = "2px solid red";
                document.getElementById("name").style.boxShadow = "1px 1px 4px red";
                return false;
            }
            if(email.trim()==""){
                alert("Enter The Email");
                document.getElementById("email").style.border = "2px solid red";
                document.getElementById("email").style.boxShadow = "1px 1px 4px red";

                return false;
            }
            if(mobile.trim()==""){
                alert("Enter The New Mobile Number Which is Not Registered Already");
                document.getElementById("mobile").style.border = "2px solid red";
                document.getElementById("mobile").style.boxShadow = "1px 1px 4px red";

                return false;
            }
            if(password.trim()==""){
                alert('Please Enter the password');
                document.getElementById("password").style.border = "2px solid red";
                document.getElementById("password").style.boxShadow = "1px 1px 4px red";
                return false;
            }
            if(ps_len<8){
                alert('Password must be contain 8 character');
                document.getElementById("password").style.border = "2px solid red";
                document.getElementById("password").style.boxShadow = "1px 1px 4px red";
                return false;
            }
            if(password_two.trim()==""){
                alert('Please Confirm The Password!');
                document.getElementById("password_two").style.border = "2px solid red";
                document.getElementById("password_two").style.boxShadow = "1px 1px 4px red";
                return false;
            }
            if(result!=0){
                alert("Password dosen't match. Try Again!!!");
                document.getElementById("password").style.border = "2px solid red";
                document.getElementById("password").style.boxShadow = "1px 1px 4px red";

                document.getElementById("password_two").style.border = "2px solid red";
                document.getElementById("password_two").style.boxShadow = "1px 1px 4px red";

                return false;
            }
            
            if(check.checked == false){
                alert("Agree Terms And Condition!! Written in the bottom of page!!");
                document.getElementById("check_id").style.border = "2px solid red";
                document.getElementById("check_id").style.boxShadow = "0px 4px 5px red";
                return false;
            } 
            return true;
          }
        </script>
        <style>
            <?php
            if($show==1){
                echo<<<style
                    .note-message{
                        display:block;
                    }
style;
            }
            ?>
        </style>
  </head>
<body>

    <div class="col-left container-fluid">
        <div class="icon"></div>
        <div class="login-font-div">ADD SOME MORE DETAIL</div>
        <div class="container-fluid form-div">
            <div class="note-message">
              <?php echo $message; ?>
            </div>
            <form action="source-php/save_user_info.php" method="POST" name="form" onsubmit="return validform();">

            <label for="name" class="label_username">Name<span style="color:red;">*</span></label>
            <input type="Name" value="<?php echo $nm; ?>" name="name" id="name" class="input-username" autocomplete="off" placeholder="Name " pattern=".{3,20}" title="3 to 20 characters">
            <label for="mobile" class="label_username margin-label">Mobile<span style="color:red;">*</span></label>
            <input type="number" value="<?php echo $mb; ?>" name="mobile" id="mobile" class="input-username" autocomplete="off" placeholder="Mobile " >
           
           <label for="email" class="label_username margin-label">Email Address<span style="color:red;">*</span></label>
           <input type="email" value="<?php echo $em; ?>" name="email" id="email" class="input-username" autocomplete="off" placeholder="Email ">
           <label for="email_two" class="label_username margin-label">Recovery Email</label>
           <input type="email" value="<?php echo $em_two; ?>"  name="email_two" id="email_two" class="input-username" autocomplete="off" placeholder="Recovery Email">
           <label for="password" class="label_username margin-label">Change Password <span style="color:red;">*</span></label>
           <input type="password" name="password" id="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,30}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 to 30 characters" class="input-username"  placeholder="Password">
           <label for="password_two" class="label_username margin-label">Confirm Password<span style="color:red;">*</span></label>
           <input type="password" name="password_two" id="password_two" class="input-username"  placeholder="Confirm Password">
           <input type="checkbox" name="checkbox" class="check-class" id="check_id"> 
           <label for="check_id" class="tandc-span" >I Agree All Terms & Conditions<span style="color:red;">*</span></label>

           <input type="submit" class="btn btn-success btn-submit" value="Login">
           </form>
       </div>
       <!-- <div class="container-fluid line-div">
          <table style="margin: 0 auto;" ><tr>
              <td style="width:45%"><hr/></td>
              <td style="vertical-align:middle; text-align: center">OR</td>
              <td style="width:45%"><hr/></td>
              </tr></table>
       </div> -->
        <!-- <h4 class="h4-text">Share your memories with us on</h4>
         <div class="social-btn-div">
            <button class="btn btn-warning btn-insta">Instagram</button>
            <button class="btn btn-primary btn-facebook">Facebook</button>
         </div> -->
        <h5 class="note-text">
            <span style="color:red;">Note: </span>
          If you enter the wrong info then you are the responsible to feel helpless in the condition of lost password. Our Team is helpless for you and you cannot login back in your account until you remember your password. Your gmail is going to help you to get access of your account.
        </h5>         
      </div>

  <hr class="container-fluid hrtag" >


 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
</body>
</html> 
  